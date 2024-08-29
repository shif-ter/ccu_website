namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
    public function switchLanguage($lang): RedirectResponse
    {
        Session::put('locale', $lang);
        App::setLocale($lang);
        return redirect()->back();
    }
}
