<div class="jumbotron" style="margin-top: 10%; color: black; padding: 5%;">
    <h6 class="lead">Your Profile So Far..</h6>
    <hr class="my-4">

    <div class="col-lg-8 offset-lg-2">
        <table class="table">
            <tbody>
            <tr class="table-secondary">
                <td>
                    Your Name
                </td>
                <td>
                    {{ Auth::user()->name }}
                </td>
            </tr>
            <tr class="table-secondary">
                <td>
                    Your Email
                </td>
                <td>
                    {{ Auth::user()->email }}
                </td>
            </tr>

            <tr class="table-secondary">
                <td>
                    Total Match
                </td>
                <td>
                    {{ $myscore->totalmatch }}
                </td>
            </tr>
            <tr class="table-secondary">
                <td>
                    Fastest Moves
                </td>
                <td>
                    {{ $myscore->fastestmoves }}
                </td>
            </tr>
            <tr class="table-secondary">
                <td>
                    Total Moves
                </td>
                <td>
                    {{ $myscore->totalmoves }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    {{--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>--}}
</div>