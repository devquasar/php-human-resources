@extends('templates.default')

@section('content')
<div class="row">
  <div class="col-lg-12">
      
          @if (!$users->count())
              <div>
                <p>Пользователей не найдено</p>
                <a href="{{ route('profile.create') }}" class="btn btn-primary btn-xs"><span>Добавить кадр</span></a>
              </div>
          @else
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                          <h2>Результаты поиска <b>"{{ Request::input('query') }}"</b></h2>
                        </div>
                        <div class="col-sm-7">
                          <a href="{{ route('profile.create') }}" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Добавить кадр</span></a>
                          <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Экспорт в Excel</span></a>						
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ФИО</th>
                      <th>Номер телефона</th>						
                      <th>Дата рождения</th>
                      <th>Дата трудоустройства</th>
                      <th>Дата увольнения</th>
                      <th>Адрес</th>
                      <th>Действия</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($users as $user)
                    @include('user.partials.userblock')
                  @endforeach
                  </tbody>
                </table>
        </div> 
    @endif
  </div>
</div>
@endsection
