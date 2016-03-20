@extends('admin.layouts.default')

@section('content')
<div class="right_col" role="main">

<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <strong></strong>
                              @foreach ($errors->all() as $error)
                                                {{ $error }}
                                                <br/>
                                                @endforeach
                            </div>
            @endif
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Design <small>different form elements</small></h2>
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
                  <br>
                  <form method="POST" action="{{action('admin\MenuController@store')}}" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Название <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="title" id="first-name" required="required" class="form-control col-md-7 col-xs-12" data-parsley-id="4339"><ul class="parsley-errors-list" id="parsley-id-4339"></ul>
                      </div>
                    </div>
                    <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Категория</label>
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                            </select>
                                          </div>
                                        </div>

                    <div class="form-group">
   <label class="control-label col-md-3 col-sm-3 col-xs-12">Цех</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" name="place_id">
                                   @foreach($places as $place)
                                   <option value="{{$place->id}}">{{$place->title}}</option>
                                   @endforeach
                         </select>
                        </div>
                      </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Подробнее
                       </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea class="form-control" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
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