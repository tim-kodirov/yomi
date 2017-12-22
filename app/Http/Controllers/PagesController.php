<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\News;
use App\Photo;
use App\Video;
use App\Category;
use App\Wanted;
use App\Question;
use App\Library;
use App\City;
use App\Manager;

class PagesController extends Controller
{

	public function getIndex()
	{

		$news = News::where('isDepartment', false)->orderBy('id', 'DESC')->take(4)->get();
		$depNews = News::where('isDepartment', true)->orderBy('id', 'DESC')->take(4)->get();
		$photos = Photo::orderBy('id', 'DESC')->take(3)->get();
		$video = Video::orderBy('id', 'DESC')->first();

		return view('main')->withNews($news)->with('depNews', $depNews)->withPhotos($photos)->withVideo($video);
	}

	public function getNews(Request $request, $id)
	{
		$news = News::where('isDepartment', $id)->orderBy('id', 'DESC')->paginate(30);

		return view('news')->withNews($news);
	}

	public function getSingleNews(Request $request, $slug)
	{
		$news = News::where('slug', $slug)->first();

		return view('news_single')->withNews($news);
	}

	public function getDepartment(Request $request, $id)
	{
		switch ($id) {
			case 1:
				return view('department.history');
				break;
			case 2:
				$region_id = $request->has('region') ? $request->region : City::first()->id;

		        $city = City::find($region_id);
		        $cities = City::all();

		        $managers = Manager::where('city_id', $region_id)->get();

				return view('department.management')->withManagers($managers)->withCities($cities)->with('selectedCity', $city);
				break;
			case 3:
				return view('department.system');
				break;
			case 4:
				return view('department.functions');
				break;
			case 5:
				return view('department.huquq');
				break;
            case 6:
                return view('department.boglanish');
                break;
            case 7:
                return view('department.bolim');
                break;
            case 8:
                return view('department.istiqbol');
                break;
            case 9:
                return view('department.kengash');
                break;
            case 10:
                return view('department.malaka');
                break;
            case 11:
                return view('department.oliy');
                break;
            case 12:
                return view('department.kafedra');
                break;
            case 13:
                return view('department.tadqiqot');
                break;
            case 14:
                return view('department.xalqaro');
                break;
            case 15:
                return view('department.xalqaroloy');
                break;
            case 16:
                return view('department.tinglovchi');
                break;
            case 17:
                return view('department.ishorinlar');
                break;
            case 18:
                return view('department.kengash');
                break;
            case 19:
                return view('department.boshqaruvpsix');
                break;
            case 20:
                return view('department.strategic');
                break;
            case 21:
                return view('department.axborottax');
                break;
            case 22:
                return view('department.oquvlartash');
                break;
            case 23:
                return view('department.ilmiybol');
                break;
            case 24:
                return view('department.monitorbol');
                break;
            case 25:
                return view('department.metodikbol');
                break;
            case 26:
                return view('department.Jalil');
                break;
            case 27:
                return view('department.Yunus');
                break;
            case 28:
                return view('department.kirishart');
                return;
		}
	}

	public function getExpert($id)
	{
		switch ($id) {
			case 1:
				return view('functions.main');
				break;
			case 2:
				return view('functions.contact');
				break;
		}
	}
	public function getDocuments()
	{
		$categories = Category::all();

		return view('documents')->withCategories($categories);
	}

	public function getWanted(Request $request, $id)
	{
		$f_name = $request->has('first_name') ? $request->first_name : '';
		$s_name = $request->has('last_name') ? $request->last_name : '';
		$m_name = $request->has('middle_name') ? $request->middle_name : '';

		$wanted = Wanted::where([ ['is_lost', $id], ['first_name', 'LIKE', '%'.$f_name.'%'], ['last_name', 'LIKE' , '%'.$s_name.'%'], ['middle_name', 'LIKE', '%'.$m_name.'%'] ])->paginate(30);

		$title = $id ? 'Без вести пропавшие' : 'Преступники';


		return view('wanted')->withWanted($wanted)->withTitle($title)->withId($id)->withFirst_name($f_name)->withLast_name($s_name)->withMiddle_name($m_name);
	}
    
    public function getSymbols()
    {
    	return view('symbols');
    }

    public function getQuestions()
    {
    	$questions = Question::where('answer', '!=', null)->orderBy('id')->paginate(30);

    	return view('questions')->withQuestions($questions);
    }

    public function getGallery($id)
    {
    	if($id == 0 )
    	{
    		$photos = Photo::orderBy('id', 'DESC')->paginate(18);
    		return view('gallery')->withPhotos($photos);
    	}else
    	{	
    		$videos = Video::orderBy('id', 'DESC')->paginate(18);
    		return view('gallery')->withVideos($videos);
    	}
    	

    	

    	
    }

    public function getDate(Request $request)
    {
    	$date = date('Y-m-d', strtotime($request->date));
    	$normalDate = date('d.m.Y', strtotime($request->date));

    	$news = News::whereDate('created_at', $date)->where('isDepartment', false)->get();

    	$depNews = News::whereDate('created_at', $date)->where('isDepartment', true)->get();

  
    	return view('date')->withNews($news)->with('depNews', $depNews)->withDate($normalDate);
    }

    public function getEvents()
    {
    	$events = array();

    	$news = News::where('isDepartment', false)->get();
    	$depNews = News::where('isDepartment', true)->get();

    	foreach($news as $n)
    	{
    		$date = date('Y-m-d', strtotime($n->created_at));
    		$events[] = ['name'=> 'news', 'date' => $date];
    	}

    	foreach($depNews as $n)
    	{
    		$date = date('Y-m-d', strtotime($n->created_at));
    		$events[] = ['name'=> 'news_dep', 'date' => $date];
    	}

    	return $events;
    }

    public function getLibrary()
    {
    	$libraries = Library::orderBy('id', 'DESC')->paginate(30);

    	return view('library')->withLibraries($libraries);
    }

    public function setLanguage(Request $request)
    {
    	$lang = $request->lang=='ru' ? 'ru' : 'uz';
    	if($request->lang=='ru'){
    	    $lang = 'ru';
        }
        else if($request->lang=='en'){
    	    $lang = 'en';
        }
        else $lang = 'uz';
    	
		$request->session()->put('locale', $lang);
	
    	return redirect()->back();
    }

    public function search(Request $request)
    {
        $search = $request->search;


        $news = News::where('title_uz', 'like', '%'.$search.'%')->orWhere('title_ru', 'like', '%'.$search.'%')->orWhere('title_ru', 'like', '%'.$search.'%')->orWhere('overview_uz', 'like', '%'.$search.'%')->orWhere('overview_ru', 'like', '%'.$search.'%')->orWhere('body_uz', 'like', '%'.$search.'%')->orWhere('body_ru', 'like', '%'.$search.'%')->orderBy('id','DESC')->paginate(10);


        return view('search')->withNews($news)->withSearch($search);
    }
}
