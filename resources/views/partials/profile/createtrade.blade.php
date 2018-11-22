<div class="my-3 p-3 bg-white rounded shadow-sm">
        <div>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapsePost" role="button" aria-expanded="false" aria-controls="collapseExample">Add Trade</a>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 pt-4 collapse hide" id= "collapsePost">

                <form method="POST" action="{{ route('trades.store') }}">
                @csrf

                    <input type='hidden' name='user_id' value='{{ Auth::user()->id }}'>
                    <input type='hidden' name='page' value='users'>
                    

                    <div class="form-group">
                        <label for="coin">Coin<span class="require">*</span></label>
                        <input type="text" class="form-control" name="coin" required />
                    </div>

                    <div class="form-group">
                        <label for="buy_price">Buy price<span class="require">*</span></label>
                        <input type="number" step="0.01" class="form-control" name="buy_price" required  />
                    </div>

                    <div class="form-group">
                        <label for="sell_price">Sell price<span class="require">*</span></label>
                        <input type="number" step="0.01" class="form-control" name="sell_price" required />
                    </div>

                    <div class="form-group">
                        <label for="trade_time">Trade time<span class="require">*</span></label>
                        <div class="input-group">
                            <input type="datetime-local" class="timepicker form-control" name="trade_time" id="trade_time" required >
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="btn-now">Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>

                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        $(() => {
            $('#btn-now').click(() => {
                $('#trade_time').val((new Date).toISOString().slice(0, 16));
            });
        });
    </script>
    @endsection()
