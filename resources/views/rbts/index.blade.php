@extends('template')
@section('page_title')
		@lang('messages.rbts.rbt-tap')
@stop
@section('content')
<div class="row">
		<div class="col-md-12">
			<div class="box box-black">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>@lang('messages.rbts.rbt-tap')</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="Add Rbt" href="{{url('rbts/create')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
							<a  id="delete_button" onclick="delete_selected('rbts')" class="btn btn-circle btn-danger show-tooltip" title="@lang('messages.template.delete_many')" href="#"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <br><br>
					<div class="table-responsive">
						<table id="example" class="table table-striped dt-responsive" cellspacing="0" width="100%">
							<thead>
							<tr>
                                <th style="width:18px"><input type="checkbox" onclick="select_all()"></th>
								<th>@lang('messages.rbts.content-name')</th>
								<th>@lang('messages.rbts.category-name')</th>
								<th>@lang('messages.rbts.operator-name')</th>
                                <th>@lang('messages.rbts.rbt-code')</th>
                                <th>@lang('messages.rbts.rbt-free')</th>
                                <th>@lang('messages.rbts.rbt-published')</th>
								<th class="visible-md visible-lg" style="width:130px">@lang('messages.type.type-action')</th>
							</tr>
							</thead>
					 		<tbody>
                          @if($rbts !=null)
							@foreach($rbts as $rbt)
								<tr class="table-flag-blue">
								    <th><input type="checkbox" class="rbts-karim" name="selected_rows[]" value="{{$rbt->id}}" onclick="collect_selected(this)"></th>
									<td>{{$rbt->content->title}}</td>
									<td>{{$rbt->category->title}}</td>
                                    <td>{{$rbt->operator->title}}</td>
                                    <td>{{$rbt->rbt_code}}</td>
                                    <td>
                                        @if($rbt->free == 0)
                                        No
                                        @else
                                        Yes
                                        @endif
                                    </td>
                                    <td>
                                        @if($rbt->published == 0)
                                        No
                                        @else
                                        Yes
                                        @endif
                                    </td>
									<td class="visible-md visible-lg">
										<div class="btn-group">
											<a class="btn btn-sm show-tooltip" title="Edit" href="{{url('rbts/'.$rbt->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
											<a class="btn btn-sm btn-danger show-tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this ?');" href="{{url('rbts/'.$rbt->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
		var check = false ; 
		function select_all()
		{
			if(!check)
			{
				$('.rbts-karim').prop("checked",!check);
				<?php
				foreach($rbts as $rbt)
				{ 
				?>
					collect_selected("{{$rbt->id}}") ;
				<?php 
					
				}	
				?>
				check = true ; 
			}
			else
			{
				$('.rbts-karim').prop("checked",!check);
				check = false ;
				clear_selected() ; 
			}
		}
	</script>
    <script>
        $('#rbt').addClass('active');
        $('#rbt-index').addClass('active');
    </script>
@stop