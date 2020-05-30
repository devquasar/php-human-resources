@extends('templates.default')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
            <div class="col-sm-5">
              <h2>Создание записи</h2>
            </div>
        </div>
    </div>
    
    <form action="{{ route('profile.create.submit') }}" method="post">
      @csrf
      <div class="row">
        <div class="form-group col-4">
            <label for="first_name">Фамилия</label>
            <input type="text" name="first_name" 
                   placeholder="Введите фамилию" id="first_name" class="form-control">
        </div>

        <div class="form-group col-4">
            <label for="second_name">Имя</label>
            <input type="text" name="second_name" 
                   placeholder="Введите имя" id="second_name" class="form-control">
        </div>

        <div class="form-group col-4">
            <label for="last_name">Отчество</label>
            <input type="text" name="last_name"
                   placeholder="Введите отчество" id="last_name" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label for="email">E-mail</label>
          <input type="text" name="email"
                 placeholder="E-mail" id="email" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label for="birth_date">Дата рождения</label>
          <input type="text" name="birth_date"
                 placeholder="Дата рождения" id="birth_date" class="form-control">
        </div>

        <div class="form-group col-6">
          <label for="address">Адрес</label>
          <input type="text" name="address"
                 placeholder="Адрес" id="address" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label for="start_work">Дата трудоустройства</label>
          <input type="text" name="start_work"
                 placeholder="Дата трудоустройства" id="start_work" class="form-control">
        </div>

        <div class="form-group col-6">
          <label for="end_work">Дата увольнения</label>
          <input type="text" name="end_work"
                 placeholder="Дата увольнения" id="end_work" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="form-group col">
          <label for="phone">Контактный номер</label>
          <input type="text" name="phone"
                 placeholder="Контактный номер" id="phone" class="form-control">
        </div>
      </div>
      <button type="submit" class="btn btn-success">Обновить</button>
    </form>

    </div>
  </div>
</div>
@endsection
