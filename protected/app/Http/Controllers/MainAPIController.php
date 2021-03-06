<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainAPIController extends Controller
{

    public function generateSurahNames()
    {
        $requestContent = [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];

        $client = new Client();
        $responsed1 = $client->get('http://api.alquran.cloud/v1/surah/114');
//        $responseGuzzle = $client->request(
//            'POST',
//                'https://gotong-royong.id/api/campaign/campaign-list/paginate',
//                    $requestContent);
//        dd(json_decode($responsed1->getBody()->getContents())->data->englishName);
//        $testDB = DB::table('qurans')
//                    ->where('id',1)
//                    ->get();
//        dd($testDB);
        $englishName = json_decode($responsed1->getBody()->getContents())->data->englishName;
        $id = 0;
        for ($i = 51; $i<=114;$i++) {
            $client2 = new Client();
            $responsed2 = $client2->get('http://api.alquran.cloud/v1/surah/'.$i);
            $englishName = json_decode($responsed2->getBody()->getContents())->data->englishName;
            $id = DB::table('surah_names')->insertGetId(
                [
                    'id' => $i,
                    'surah_name' => $englishName
                ]
            );
        }
        dd($id);
    }

    public function generateOneQuestion() {
        $max_no_surat = 114;
        $no_surat = 0;
        $ayat_surat = 0;
        $id_question = 0;
        $max_options = 5;
//        $randomQuran = DB::table('qurans')
//            ->whereNotIn('id',[1])
//            ->whereNotIn('word',['aaa'])
//            ->whereNotIn('trans',['aaa'])
//            ->inRandomOrder()
//            ->first();
//        dd($randomQuran);
//        $question_db = DB::table('qurans')
//            ->where('no_surat', 1)
//            ->where('ayat_surat', 1)
//            ->get();
//        dd($question_db[0]->id);
        for ($idx = 1; $idx <= $max_no_surat;$idx++) {
            $no_surat = $idx;
            $max_ayat_surat = DB::table('surah_names')
                                ->where('id',$no_surat)
                                ->first();
            for($idx2 = 1;$idx2 <= $max_ayat_surat->number_of_ayahs;$idx2++) {
                $ayat_surat = $idx2;
                $question_db = DB::table('qurans')
                    ->where('no_surat', $no_surat)
                    ->where('ayat_surat', $ayat_surat)
                    ->get();
                $question_text = '';
                $idx3 = 0;
                foreach ($question_db as $data) {
                    if(count($question_db) > 1) {
                        if($idx3==0) {
                            $question_text .= '';
                        } else {
                            $question_text .= ' '.$data->word;
                        }
                    }
                    $idx3++;
                }

                $question_text .= '...';

                $id_question = DB::table('questions')->insertGetId(
                    [
                        'question_content' => $question_text
                    ]
                );

                for ($idx4=1;$idx4<=$max_options;$idx4++) {
                    $randomQuran = DB::table('qurans')
                        ->whereNotIn('id',[$question_db[0]->id])
                        ->whereNotIn('word',[$question_db[0]->word])
                        ->whereNotIn('trans',[$question_db[0]->trans])
                        ->inRandomOrder()
                        ->first();

                    if ($idx4<$max_options) {
                        $id_answer_option = DB::table('answer_options')->insertGetId(
                            [
                                'id_question' => $id_question,
                                'id_quran' => $randomQuran->id,
                                'answer_option_content' => $randomQuran->word,
                                'is_correct' => 0
                            ]
                        );
                    } else {
                        $id_answer_option = DB::table('answer_options')->insertGetId(
                            [
                                'id_question' => $id_question,
                                'id_quran' => $question_db[0]->id,
                                'answer_option_content' => $question_db[0]->word,
                                'is_correct' => 1
                            ]
                        );
                        $id_correct_answer = DB::table('correct_answers')->insertGetId(
                            [
                                'id_question' => $id_question,
                                'id_quran' => $question_db[0]->id,
                                'id_surah_name' => $question_db[0]->no_surat,
                                'correct_answer_content' => $question_db[0]->word,
                                'id_answer_option' => $id_answer_option
                            ]
                        );
                    } // end if else $idx4<$max_options
                } // end for $max_options
            } // end for $max_ayat_surat->number_of_ayahs
        } // end for $idx <= $max_no_surat
        dd($id_question. ' '. $no_surat. ' '.$ayat_surat);
    }

    public function generateUpdateQuestion() {
        $questions = DB::table('questions')->get();
        $correct_answer = '';
        for ($i=1;$i<=count($questions);$i++) {
            $correct_answer = DB::table('correct_answers')
                            ->where('id_question',$i)
                            ->first();
            DB::table('questions')
                ->where('id', $i)
                ->update([
                    'id_quran' => $correct_answer->id_quran,
                    'id_surah_name' => $correct_answer->id_surah_name
                ]);
        }
        dd($correct_answer);
    }

    public function generateNumberAyah()
    {
        $numberAyah = 0;
        for ($i = 113; $i<=114;$i++) {
            $client2 = new Client();
            $responsed2 = $client2->get('http://api.alquran.cloud/v1/surah/'.$i);
            $numberAyah = json_decode($responsed2->getBody()->getContents())->data->numberOfAyahs;
            DB::table('surah_names')
                ->where('id', $i)
                ->update([
                    'number_of_ayahs' => $numberAyah
                ]);
        }
        dd($numberAyah);
    }

    public function generateJuz()
    {
        $juz = 0;
//        $client2 = new Client();
//        $responsed2 = $client2->get('http://api.alquran.cloud/v1/surah/67');
//        $numberAyah = json_decode($responsed2->getBody()->getContents())->data->ayahs[0]->juz;
//        dd($numberAyah);
        for ($i = 105; $i<=114;$i++) {
            $client2 = new Client();
            $responsed2 = $client2->get('http://api.alquran.cloud/v1/surah/'.$i);
            $juz = json_decode($responsed2->getBody()->getContents())->data->ayahs[0]->juz;
            DB::table('surah_names')
                ->where('id', $i)
                ->update([
                    'juz' => $juz
                ]);
        }
        dd($juz);
    }


    public function getQuestionAnswersByIdQuestion($id) {
        $the_question = DB::table('questions')
                            ->where('id',$id)
                            ->first();
        $the_answer_options = DB::table('answer_options')
                            ->where('id_question',$the_question->id)
                            ->inRandomOrder()
                            ->get();
        $the_quran = DB::table('qurans')
                            ->where('id',$the_question->id_quran)
                            ->first();
        $the_surah = DB::table('surah_names')
                            ->where('id',$the_question->id_surah_name)
                            ->first();

        $data = array(
            'the_question' => $the_question,
            'the_answer_options' => $the_answer_options,
            'the_quran' => $the_quran,
            'the_surah' => $the_surah
        );

        return response()->json([
            'status' => 200,
            'data' => $data
        ], 200);
    }

    public function getQuestionAnswersByJuz($juz, $num_questions) {
        $the_surah = DB::table('surah_names')
            ->where('juz',$juz)
            ->inRandomOrder()
            ->first();


        $questionsAnswers = [];
        $questionsAnswers['the_surah'] = [];
        array_push($questionsAnswers['the_surah'], $the_surah);

        $questionsAnswers['questions'] = [];
        $current_id_questions = [];
        $current_id_questions[0] = 0;
        for ($idx1 = 0,$number_count = 1;$idx1 < $num_questions; $idx1++,$number_count++) {
            $the_question = DB::table('questions')
                ->where('id_surah_name',$the_surah->id)
                ->whereNotIn('id',[$current_id_questions[$idx1]])
                ->first();
            array_push($current_id_questions, $the_question->id);
            $the_answer_options = DB::table('answer_options')
                ->where('id_question',$the_question->id)
                ->inRandomOrder()
                ->get();
            array_push(
                $questionsAnswers['questions'], [
                    'number' => $number_count,
                    'the_question' => $the_question,
                    'the_answer_options' => $the_answer_options
            ]);
        }

        return response()->json([
            'status' => 200,
            'data' => $questionsAnswers
        ], 200);
    }

    public function getQuestionAnswersByJuzV2($num_questions, $juz) {
        $questionsAnswers = [];
        $current_id_questions = [];
        $current_id_questions[0] = 0;

        for ($idx1 = 0,$number_count = 1;$idx1 < $num_questions; $idx1++,$number_count++) {
            $the_surah = DB::table('surah_names')
                ->where('juz',$juz)
                ->inRandomOrder()
                ->first();
            $the_question = DB::table('questions')
                ->where('id_surah_name',$the_surah->id)
                ->whereNotIn('id',[$current_id_questions[$idx1]])
                ->where('question_content','<>','...')
                ->first();
            array_push($current_id_questions, $the_question->id);
            $the_correct_answer = DB::table('correct_answers')
                                    ->where('id_question', $the_question->id)
                                    ->first();
            $the_answer_options = DB::table('answer_options')
                ->select('answer_option_content')
                ->where('id_question',$the_question->id)
                ->where('is_correct', 0)
                ->inRandomOrder()
                ->get()->pluck('answer_option_content');
            array_push(
                $questionsAnswers, [
                    "category" => "Juz ".$juz,
                    "type" => "multiple",
                    "difficulty" => "easy",
                    "question" => $the_question->question_content,
                    "correct_answer" => $the_correct_answer->correct_answer_content,
                    "incorrect_answers" => $the_answer_options,
            ]);
        }

        return response()->json([
            'response_code' => 0,
            'results' => $questionsAnswers
        ], 200);
    }

    public function getQuestionAnswersBySurah($num_questions, $surah) {
        $questionsAnswers = [];

        $the_surah = DB::table('surah_names')
            ->where('id',$surah)
            ->inRandomOrder()
            ->first();
        $question_test = DB::table('questions')
                            ->where('id',1)
                            ->first();
//        dd($question_test);
        $questionsRandomGenerate = DB::table('questions')
                                ->where('id_surah_name', $surah)
                                ->where('question_content','<>','...')
                                ->inRandomOrder()
                                ->limit($num_questions)
                                ->get();
//        dd($questionsRandomGenerate);
        if(count($questionsRandomGenerate) < $num_questions) {
            $num_questions = count($questionsRandomGenerate);
        }

        for ($idx1 = 0;$idx1 < $num_questions; $idx1++) {

            $the_question = $questionsRandomGenerate;
//            dd($the_question);
            $the_correct_answer = DB::table('correct_answers')
                ->where('id_question', $the_question->get($idx1)->id)
                ->first();
            $the_answer_options = DB::table('answer_options')
                ->select('answer_option_content')
                ->where('id_question',$the_question->get($idx1)->id)
                ->where('is_correct', 0)
                ->inRandomOrder()
                ->limit(3)
                ->get()->pluck('answer_option_content');
//            if($idx1 == 6) {
//                dd($the_answer_options);
//            }
            array_push(
                $questionsAnswers, [
                "category" => "Surah ".$surah." - ".$the_surah->surah_name,
                "type" => "multiple",
                "difficulty" => "easy",
                "question" => $the_question->get($idx1)->question_content,
                "correct_answer" => $the_correct_answer->correct_answer_content,
                "incorrect_answers" => $the_answer_options,
            ]);
        }

        return response()->json([
            'response_code' => 0,
            'results' => $questionsAnswers
        ], 200);
    }

    public function updateDot() {
        //٠

        $questions = DB::table('questions')->get();
        $new_question = '';

        for ($i = 4484; $i<=count($questions);$i++) {

            $the_data = DB::table('questions')
                ->where('id', $i)
                ->get()
                ->map(function ($data) {
                    $data->question_content = str_replace('...', '', $data->question_content);
                    return $data;
                });
            $new_question = '٠٠٠'.$the_data->get(0)->question_content;
            DB::table('questions')
                ->where('id', $i)
                ->update(['question_content' => $new_question]);
        }

        dd($new_question);
    }
}
