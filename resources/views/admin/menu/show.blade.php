@extends('admin.layouts.default')

@section('content')
<div class="right_col" role="main">

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
@if (session('message'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                              </button>
                    {{ session('message') }}
                </div>
            @endif
              <div class="x_panel">
                <div class="x_title">
                  <h2>Товары</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
        <div class="content-header-buttons pull-right">
                    <a href="{{url('admin/goods/add')}}"><button class="btn btn-sm btn-success">Добавить товар</button></a>
                </div>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Категория</th>
                        <th>Цех</th>
                        <th>Цена</th>
                        <th>Дата создания</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($goods as $good)
                      <tr>
                        <th scope="row">{{$good->id}}</th>
                        <th scope="row">{{$good->title}}</th>
                        <td>{{$good->category->title}}</td>
                        <td>{{$good->place->title}}</td>
                        <td>{{$good->clean_price}}  руб.</td>
                        <td>{{$good->created_at}}</td>
                        <td><a href="{{url('/admin/goods/edit/'.$good->id)}}">Изменить</a></td>
                      </tr>
                      @endforeach
                    </tbody>

                  </table><div class="text-right">{{$goods->render()}}</div>

                </div>
              </div>
            </div>
</div>

        <!-- footer content -->

        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
@endsection