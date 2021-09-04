namespace App\ViewComposer;

class ViewComposer {

public function compose() {
$post = Post::where('slug',true)->first();
view()->share('post',$post);
}
