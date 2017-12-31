@extends('template')
@section('page_title')
	@lang('messages.category.category')
@stop
@section('content')
<div class="row">
		<div class="col-md-12">
			<div class="box box-black">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>	@lang('messages.category.category')</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Add Category" href="{{url('categories/create')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
							<a  id="delete_button" onclick="delete_selected('categories')" class="btn btn-circle btn-danger show-tooltip" title="@lang('messages.template.delete_many')" href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <br><br>
					<div class="table-responsive">
						<table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
                                <th style="width:18px"><input type="checkbox"></th>
                                <th>@lang('messages.category.name-category')</th>
								<th class="visible-md visible-lg" style="width:130px">@lang('messages.category.category-action')</th>
                            
							</tr>
							</thead>
					 		<tbody>
                          @if($categories !=null)
							@foreach($categories as $category)
								<tr class="table-flag-blue">
                                    <th><input type="checkbox" name="selected_rows[]" value="{{$category->id}}" onclick="collect_selected(this)"></th>
                                    <td>{{$category->title}}</td>
                                    
                                    <td class="visible-md visible-lg">
										<div class="btn-group">
											<a class="btn btn-sm show-tooltip" title="Edit" href="{{url('categories/'.$category->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
											<a class="btn btn-sm btn-danger show-tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this ?');" href="{{url('categories/'.$category->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</td>
                                
								</tr>
							@endforeach
							</tbody>
                       @endif
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop


@section('script')
    <script>
        $('#category').addClass('active');
        $('#category-index').addClass('active');
    </script>
@stop