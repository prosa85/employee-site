<?php

namespace App\Http\Controllers\RequestForms;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\requestform;
use Illuminate\Http\Request;
use Session;
use App\User;

class requestformsController extends Controller
{
    
    public function __construct(){
        $this->middleware('isAdmin')->only('index', 'update', 'edit', 'delete');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $requestforms = requestform::where('date_of_request', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
				->orWhere('type_of_absence', 'LIKE', "%$keyword%")
				->orWhere('hr_status', 'LIKE', "%$keyword%")
				->orWhere('status_changed_by', 'LIKE', "%$keyword%")
				->orWhere('user_id', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $requestforms = requestform::paginate($perPage);
        }

        return view('RequestForms.requestforms.index', compact('requestforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('RequestForms.requestforms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'date_of_request' => 'required|date',
            'status' => 'required',
            'type_of_absence' => 'required',
            
        ]);
        
        $user = $request->user();
        $requestData = $request->all();
        if($user->isAdmin()){
            $requestData['user_id'] = $request->user_id;
            $requestData['username'] = User::find($request->user_id)->username;
        }
        else
        {
            $requestData['user_id'] = $user->id;
            $requestData['username'] = $user->username;   
        }

        // dd($requestData);
        requestform::create($requestData);

        Session::flash('flash_message', 'requestform added!');

        return redirect('requestforms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $requestform = requestform::findOrFail($id)->load('entries');

        return view('RequestForms.requestforms.show', compact('requestform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $requestform = requestform::findOrFail($id);

        return view('RequestForms.requestforms.edit', compact('requestform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'date_of_request' => 'required|date',
			'status' => 'required',
			'type_of_absence' => 'required',
		]);
        $requestData = $request->all();
        
        $requestform = requestform::findOrFail($id);
        $requestform->update($requestData);

        Session::flash('flash_message', 'requestform updated!');

        return redirect('requestforms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        requestform::destroy($id);

        Session::flash('flash_message', 'requestform deleted!');

        return redirect('requestforms');
    }
}
