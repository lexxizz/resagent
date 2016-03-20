@extends('admin.layouts.default')

@section('content')
<div class="right_col" role="main">

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Stripped table <small>Stripped table subtitle</small></h2>
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

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Категория</th>
                        <th>Цех</th>
                        <th>Цена</th>
                        <th>Дата создания</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($goods as $good)
                      <tr>
                        <th scope="row">{{$good->id}}</th>
                        <th scope="row">{{$good->title}}</th>
                        <td>{{$good->category->title}}</td>
                        <td>{{$good->place->title}}</td>
                        <td>-</td>
                        <td>{{$good->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

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