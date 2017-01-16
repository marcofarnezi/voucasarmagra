<?php
namespace App\Http\Controllers;
use App\Categorias;
use App\File;
use App\Posts;
use App\Http\Requests\PostRequest;
use App\Tag;
class PostsAdminController extends Controller
{
    private $post;
    private $categorias;

    public function __construct(Posts $post, Categorias $categorias)
    {
        $this->post = $post;
        $this->categorias = $categorias;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categorias = $this->categorias->getOptionsSelect();
        
        return view('admin.posts.create', compact('categorias'));
    }

    /**
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request )
    {
        $post = $this->post->create($request->all());
        $post->files()->sync($this->getFilesPathIds($request->fotos_index));

        return redirect()->route('admin.posts.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post  = $this->post->find($id);
        $categorias = $this->categorias->getOptionsSelect();

        return view('admin.posts.edit', compact('post', 'categorias'));
    }

    /**
     * @param $id
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());
        $post  = $this->post->find($id);
        $post->files()->sync($this->getFilesPathIds($request->fotos_index));

        return redirect()->route('admin.posts.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }

    /**
     * @param $tags
     * @return array
     */
    private function getFilesPathIds($files)
    {
        $fileList = array_filter(array_map('trim', explode(',' ,$files )));
        $filesId = [];
        foreach ($fileList as $path) {
            $filesId[] = File::firstOrCreate(['path' => $path])->id;
        }

        return $filesId;
    }
}