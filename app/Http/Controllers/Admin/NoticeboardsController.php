<?php
namespace App\Http\Controllers\Admin;

use App\Events\NoticeBoardEvent;
use App\Http\Controllers\AdminBaseController;
use App\Models\Employee;
use App\Models\Noticeboard;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class NoticeboardsController extends AdminBaseController
{

	public function __construct()
    {
        parent::__construct();
        $this->data['pageTitle']        =   'Notice Board';
        $this->data['noticeBoardOpen']  =   'active open';
        $this->data['noticeBoardActive']    =   'active';
    }
	public function index()
	{

		$this->data['noticeboards'] = Noticeboard::orderBy('created_at','DESC')->get();


		return View::make('admin.noticeboards.index', $this->data);
	}

	/**
	 * Show the form for creating a new noticeboard
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('admin.noticeboards.create',$this->data);
	}

	/**
	 * Store a newly created noticeboard in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Noticeboard::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        if($this->data['setting']->notice_notification==1)
        {
            //        Send email to all admins
            $employees = Employee::select('id','email')->where('status', '=', 'active')->get();
            foreach ($employees as $employee) {
	            $email = "{$employee->email}";

	            $this->data['employee_name'] = $employee->fullName;
				// TODO: Mail Implementation
				event(new NoticeBoardEvent($employee));
	            //Send Email to All active users
//	            Mail::send('emails.admin.noticeboard', $this->data, function ($message) use ($email) {
//		            $message->from($this->data['setting']->email, $this->data['setting']->name);
//		            $message->to($email)
//		                    ->subject('New Notice Published - ' . $this->data['setting']->website);
//	            });
            }
        }
		Noticeboard::create($data);
        Session::flash('success',"<strong>{$data['title']}</strong> created successfully");
		return Redirect::route('admin.noticeboards.index');
	}


    //Datatable ajax request
    public function ajax_notices()
    {
        $result = Noticeboard::select('id','title','description','status','created_at')
                        ->orderBy('created_at','desc');

        return DataTables::of($result)
            ->editColumn('created_at',function($row){
                return date('d-M-Y',strtotime($row->created_at));
            })
            ->editColumn('status',function($row)
            {
                $color = [
                    'active'   =>  'success',
                    'inactive'  =>  'danger'
                ];
                return "<span class='label label-{$color[$row->status]}'>{$row->status}</span>";
            })
            ->addColumn('edit',function($row) {
				return '<p><a  class="btn purple"  href="'.route('admin.noticeboards.edit',$row->id).'" ><i class="fa fa-edit"></i> View/Edit</a></p>
	                   <p><a  style="width: 105px;" href="javascript:;" onclick="del(\''. $row->id .'\',\''. $row->title .'\');return false;" class="btn red">
                        <i class="fa fa-trash"></i> Delete</a></p>';
			})
			->escapeColumns(['edit', 'status'])
            ->make(false);
    }


	public function edit($id)
	{
		$this->data['notice'] = Noticeboard::find($id);

		return View::make('admin.noticeboards.edit', $this->data);
	}



	public function update($id)
	{
		$noticeboard = Noticeboard::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Noticeboard::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$noticeboard->update($data);
        Session::flash('success',"<strong>{$data['title']}</strong> updated successfully");
		return Redirect::route('admin.noticeboards.edit',$id);
	}

	/**
	 * Remove the specified noticeboard from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Noticeboard::destroy($id);
        $output['success']  =   'deleted';
        return Response::json($output,200);

	}

}
