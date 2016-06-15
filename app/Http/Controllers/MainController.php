<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;
use App\User;
use App\Place;
use Auth;

class MainController extends Controller {

	public function __construct()
	{
		//$this->middleware('guest');
	}

	//render main page ,get and process data form db
	public function index()
	{
		$langs = [
			'ru' => [
				'sign_in'=>['войти','выйти'],
				'title'=>['Главная','О нас','Цены','Галерея','Контакты'],
				'desc'=>['IT HUB Coworking place - первый коворкинг запорожья','Это оборудованное всем необходимым пространство для занятия бизнесом или определенной работой которое любой желающий может взять в аренду'],
				'features'=>['Главная','О нас','Цены','Галерея','Контакты','удобная транспортная развязка','нетворкинг зона','комфортные условия работы','возможность обучения и развития','высокоскоростной интернет','мини бар и бесплатный кофе','500 кв м рабочего места','душ','аудитории для проведения мероприятий','безопасность'],
				'btn_text'=>['забронировать']
			],
			'en' => [
				'sign_in'=>['sign in','logout'],
				'title'=>['Home','About','Price','Gallery','Contacts'],
				'desc'=>['IT HUB Coworking place - first coworking in zp','It is equipped with all the necessary space for doing business or certain work which anyone can rent'],
				'features'=>['convenient transportation', 'Networking Zone', 'comfortable conditions of work', 'the possibility of learning and development', 'high speed internet' ,'mini bar and free coffee', '500 square meters of working space', 'shower', 'audience event', 'safety'],
				'btn_text'=>['book']
			],
			'ukr' => [
				'sign_in'=>['Увійти', 'вийти'],
				'title'=>['Головна', 'Про нас', 'Ціни', 'Галерея', 'Контакти'],
				'desc'=>['IT HUB Coworking place - перший коворкінг запорожья', 'Це обладнане всім необхідним простір для заняття бізнесом або певною роботою яке кожен охочий може взяти в оренду','Це обладнане всім необхідним простір для заняття бізнесом або певною роботою яке кожен охочий може взяти в оренду'],
				'features'=>['Зручна транспортна розвязка', 'нетворкінг зона', 'комфортні умови роботи', 'можливість навчання та розвитку', 'високошвидкісний інтернет', 'міні бар і безкоштовна кава', '500 кв м робочого місця', 'душ', ' аудиторії для проведення заходів ',' безпеку '],
				'btn_text'=>['забронювати']
			]
		];

		$current_url = explode(' ', $_SERVER['REQUEST_URI']);
		(string)$lang = trim($current_url[count($current_url) - 1], '/');

		if(empty($lang)){
			(string)$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		}



		//dd($lang);
		switch ($lang) {
			case 'ru':
				$data = $langs['ru'];
				break;
			case 'en':
				$data = $langs['en'];
				break;
			case 'ukr':
				$data = $langs['ukr'];
				break;
			default:
				$data = $langs['ru'];
				break;
		}
		//dd($data);
		return view('main',['data'=>$data]);
	}

	public function render_auth()
	{
		return view('auth');
	}

	public function getuser($id){

		$user = User::find($id);
	//	dd($user['attributes']);
		return view('user',['data'=>$user]);

	}

	public function places(){
		return view('places');
	}

	public function signinpage(){
		return view('signin');
	}

	public function bookplace(Request $request){
		//return "time=".$request->time." datetime=".$request->datetime." selected_item=".$request->selected_item;

		$place = Place::find($request->selected_item);
		$current_user = Auth::user();

		if($place["is_book"] == 0){

			$model = new Place;
			$model->time_spend = $request->time;
			$model->date_time = $request->datetime;
			$model->is_book = 1;
			$model->user_id = $current_user["id"];

			$model->save();
			//$res = DB::update('update places set time_spend = ? and date_time = ? and is_book = 1 and user_id = ? where id = ?', ["$request->time","$request->datetime","$current_user['id']"]);

		}else{
			return 0;
		}


	}

}
