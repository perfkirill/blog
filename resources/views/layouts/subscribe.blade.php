<div class="subscrube">
    <div class="container">
      
        <div class="row">
            <div class="col-md-12">
                <h2>Подпишитесь на рассылку ахуенных новостей про Laravel</h2>
            </div>
            </div>
             <form action="{{url('subscrabe')}}" method="post">
              {{csrf_field()}}
             <div class="row subscribe_form">
            <div class="col-md-4">
                <label for="">E-mail</label>
                <input type="text" name="email">
            </div>
            <div class="col-md-4"><button>Подписаться</button></div>
        </div>
        @include('errors')
        </form>
    </div>
</div>