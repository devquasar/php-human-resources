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
                          <h2>Список кадров</h2>
                        </div>
                        <div class="col-sm-7">
                          <a href="{{ route('profile.create') }}" class="btn btn-primary"><i class="material-icons">add_circle</i> <span>Добавить кадр</span></a>
                          <a href="#" class="btn btn-primary"><i class="material-icons">insert_drive_file</i> <span>Экспорт в Excel</span></a>
                          <a href="#" class="btn btn-primary"><i class="material-icons">insert_drive_file</i> <span>Импорт из Excel</span></a>						
						
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
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div> 
    @endif
  </div>
</div>
@endsection
