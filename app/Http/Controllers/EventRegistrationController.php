<?php

namespace App\Http\Controllers;

use App\Models\eventRegistration;
use Illuminate\Http\Request;

class EventRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view( 'community/pages/event-preview' );
    }

    public function joinCommunity( Request $request ) {
        $request->validate( [
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required|integer',
            'college'=>'required',
            'year'=>'required',
            'branch'=>'required',
        ] );

        $interest = $request->post( 'interest' );
        $data = json_decode( $interest, true );
        $csv_data = collect( $data )->pluck( 'value' )->implode( ',' );

        $radio = $request->post( 'need_mentor' );
        $yourval = ( isset( $radio ) ) ? 1 : 0;

        $model = new eventRegistration();
        $model->name = $request->post( 'name' );
        $model->email = $request->post( 'email' );
        $model->contact = $request->post( 'contact' );
        $model->college = $request->post( 'college' );
        $model->year = $request->post( 'year' );
        $model->branch = $request->post( 'branch' );
        $model->enrollment_no = $request->post( 'enrollment_no' );
        $model->interest = $csv_data;
        $model->need_mentor = $yourval;
        $model->startup_idea = $request->post( 'startup_idea' );
        $model->skills_set = $request->post( 'skills_set' );
        $model->save();

        $request->session()->flash( 'message', 'form subbmited successfully' );
        return view( 'community/pages/event-preview' );
        // echo 'successfull';
    }
    


}
