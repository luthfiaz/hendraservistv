@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Panel Title</h3>
              </div>
            	<div class="panel-body">
	                <div class="content-row">
	                  <div class="panel panel-default">
	                    <div class="panel-heading">
	                      <div class="panel-title"><b>Create Form</b>
	                      </div>

	                      <div class="panel-options">
	                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
	                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
	                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
	                      </div>
	                    </div>

	                    <div class="panel-body">
	                      <form role="form">
	                      	<div class="form-group">
	                      		<div class="col-md-3">
			                      <select name="selecter_basic" class="selecter_3" data-selecter-options='{"cover":"true"}'>
			                        <option value="0" disabled>Silakan Pilih gambar yang ingin diubah</option>
			                        <option value="1">Gambar 1</option>
			                        <option value="2">Gambar 2</option>
			                        <option value="3">Gambar 3</option>
			                        <option value="4">Gambar 4</option>
			                        <option value="5">Gambar 5</option>
			                        <option value="6">Gambar 6</option>
			                      </select>
			                  	</div>
		                    </div>
	                        <div class="form-group">
	                          <label for="exampleInputFile">File input</label>
	                          <input type="file" id="exampleInputFile">
	                          <p class="help-block">Example block-level help text here.</p>
	                        </div>
	                        
	                        <button type="submit" class="btn btn-default">Submit</button>
	                      </form>
	                    </div>
	                  </div>
	                </div>
	                <div class="content-row">
	                  <div class="panel panel-default">
	                    <div class="panel-heading">
	                      <div class="panel-title"><b>Gambar yg digunakan saat ini</b>
	                      </div>

	                      <div class="panel-options">
	                        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
	                        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
	                        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
	                      </div>
	                    </div>

	                    <div class="panel-body">

	                    	<div class="content-row">
			                  <h2 class="content-row-title">Thumbnails</h2>
			                  <div class="row">
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic1.jpg') }}">
			                        
			                      </div>
			                    </div>
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic2.jpg') }}">
			                        
			                      </div>
			                    </div>
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic1.jpg') }}">
			                        
			                      </div>
			                    </div>
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic1.jpg') }}">
			                        
			                      </div>
			                    </div>
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic1.jpg') }}">
			                        
			                      </div>
			                    </div>
			                    <div class="col-sm-6 col-md-4">
			                      <div class="thumbnail">
			                        <img class="img-rounded" src="{{ url('storage/app/gallery/pic1.jpg') }}">
			                        
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                      
	                    </div>
	                  </div>
	                </div>
              	</div><!-- panel body -->
            </div>
        </div><!-- content -->
     </div>
    
@endsection

@section('scripts')
@endsection