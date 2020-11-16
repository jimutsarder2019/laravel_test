@extends('layouts.admin-main')

@section('title', 'Profile')

@section('content')

<h2>User Dashboard</h2>
</br>
<table class="w3-table-all" id="customers">
	<tr>
	   <th class="text-center">ID</th>
	   <th class="text-center">Name</th>
	   <th class="text-center">Email</th>
	   <th class="text-center">Action</th>
	</tr>
	@foreach($users as $user)
		<tr class="js_user_row_{!! $user->id !!}">
			<td class="text-center"><strong>{!! $user->id !!}</strong></td>
			<td class="text-center"><strong id="js_name_{!! $user->id !!}">{!! $user->name !!}</strong></td>
			<td class="text-center"><strong id="js_email_{!! $user->id !!}">{!! $user->email !!}</strong></td>
			<td class="text-center">
				<div class="row">
				    <div class="col-md-4">
						<a class="js_user_view" data-id="{!! $user->id !!}" href="javascript:void(0)">View</a>
					</div>
					<div class="col-md-4">
						<a class="js_user_update_modal" data-id="{!! $user->id !!}" href="javascript:void(0)">Update</a>
					</div>
					<div class="col-md-4">
						<a class="js_user_delete" data-id="{!! $user->id !!}" href="javascript:void(0)">Delete</a>
					</div>
				</div>
			</td>
		</tr>
	@endforeach
</table>
<div id="demo"></div>

<!-- Modal -->
  <div class="modal fade js_user_view_modal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body js_user_modal_body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@endsection