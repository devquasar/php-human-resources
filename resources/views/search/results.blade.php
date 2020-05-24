@extends('templates.default')

@section('content')
<div class="row">
  <div class="col-lg-12">
      
          @if (!$users->count())
              <p>Пользователей не найдено</p>
          @else
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                          <h2>Результаты поиска <b>"{{ Request::input('query') }}"</b></h2>
                        </div>
                        <div class="col-sm-7">
                          <a href="#" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                          <a href="#" class="btn btn-primary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>						
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
