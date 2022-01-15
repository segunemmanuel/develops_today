<?php
namespace App\Http\Controllers\Api;
use App\Model\Posts;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Posts::all();
return response()->json($data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            //inserting data into the database
            $validateData=$request->validate([
                 'title'=>'required |unique:posts|max:25',
                'link'=>'required',
                'author'=>'required',
                // 'created_at'=>'required',
            ]);
    $data=array();
    $data['title']=$request->title;
    $data['link']=$request->link;
    $data['author-name']=$request->author;
    $data['created_at']=Carbon::now();

    $insert=DB::table('posts')->insert($data);
    return response('Inserted data successfully');



        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $show=DB::table('posts')->where('id',$id)->first();
        return response()->json($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData=$request->validate([
            'title'=>'required |unique:posts|max:25',
            'link'=>'required',
            'author'=>'required',

        ]);
    $data=array();
    $data['title']=$request->title;
    $data['link']=$request->link;
    $data['author-name']=$request->author;
    $data['created_at']=Carbon::now();
$insert=DB::table('posts')->where('id',$id)->update($data);
return response('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            // deleting
            DB::table('posts')->where('id',$id)->delete();
            return response('Deleted');

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upvote(Request $request, $id){

    Posts::where('id', $id)->increment('amount-of-upvotes');
return response('Done');
    }
}
