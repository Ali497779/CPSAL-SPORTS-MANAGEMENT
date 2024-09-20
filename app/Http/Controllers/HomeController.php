<?php

namespace App\Http\Controllers;

use App\Models\seo;
use App\Models\Page;
use App\Models\User;
use App\Models\Sport;
use App\Models\Banner;
use App\Models\Battle;
use App\Models\Player;
use App\Models\Gallery;
use App\Models\Session;
use App\Models\PlayerScore;
use App\Models\SessionTeam;
use App\Models\SessionTeamScore;
use App\Models\SessionTeamPlayer;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;


class HomeController extends Controller
{
    public function index(): View
    {
        
        $home = 'Home';
        return view('index', [
            'users' => User::inRandomOrder()->where('username','!=','admin')->take(3)->get(['username', 'avatar']),
            'battles' => Battle::latest()->take(7)->get(),
            'latestMatch' => SessionTeamScore::latest()->with(['battle', 'SessionTeam.team'])->take(2)->get(),
            // 'upcomingBattle' => Battle::where('battle_date', '>=', date('Y-m-d'))->oldest('battle_date')->with(['byTeam', 'forTeam'])->first(),
            'upcomingBattle' => Battle::where('battle_date', '>=', date('Y-m-d'))->with(['byTeam', 'forTeam'])->first(),

            'topPlayers' => PlayerScore::with(['player', 'team'])
                ->select('player_id', 'team_id', DB::raw('SUM(score) as total_score'))
                ->groupBy('player_id', 'team_id')
                ->orderBy('total_score', 'desc')
                ->take(8)
                ->get()
                ,
            // 'banner'=> Banner::get(),
            // 'bannerimage' => Page::where('name',$home)->where('type','banner')->get(),
            'bannerData' => Page::where('name', $home)
                  ->whereIn('type', ['banner', 'bannerheading','bannerquote'])->where('status', 1)
                  ->distinct('type')
                  ->get(),
           
            'about' => Page::where('name', $home)->where('type','Abouttext')->where('status', 1)->first(),
            'aboutleague' => Page::where('name', $home)->where('type','Aboutleague')->where('status', 1)->first(),
            'frequentquest' => Page::where('name', $home)->where('status', 1)
            ->whereIn('type', ['frequentquestion', 'frequentanswer'])
            ->distinct('type')
            ->get(),
            'lawofplay' => Page::where('name', $home)->where('status', 1)
            ->whereIn('type', ['Lawofplay', 'Lawofplayfile'])
            ->distinct('type')
            ->get(),
            // 'bannertext' => Page::where('name',$home)->where('type','bannertext')->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
            'Heading' => Page::where('name','Gallery')->where('type','Heading')->first(),
            'Paragraph' => Page::where('name','Gallery')->where('type','Paragraph')->first(),
            // 'gallery' => Page::where('name','Gallery')->where('type','Sport')->get(),
            // 'gallerypic' => Gallery::where('page','Gallery')->get()
            'filter' => Sport::get()->Where('name','!=','Flag Football')->Where('name','!=','Track & Feild')->Where('name','!=','Cross Country')->take(7),
            'gallerypic' => Gallery::where('page','Gallery')->get(),
            'ourmatchcontent' => Page::where('name',$home)->where('status', 1)->where('type','ourmatchcontent')->first(),
            'imgcard1' => Page::where('name',$home)->where('type','imgcard1')->where('status', 1)->first(),
            'headingcard1' => Page::where('name',$home)->where('type','headingcard1')->where('status', 1)->first(),
            'cardcontent1' => Page::where('name',$home)->where('type','cardcontent1')->where('status', 1)->first(),
            'imgcard2' => Page::where('name',$home)->where('type','imgcard2')->where('status', 1)->first(),
            'headingcard2' => Page::where('name',$home)->where('type','headingcard2')->where('status', 1)->first(),
            'cardcontent2' => Page::where('name',$home)->where('type','cardcontent2')->first(),
            'contacts' => Page::where('name', 'Contact')
                  ->whereIn('type', ['Contact','phone', 'mail','location'])
                  ->distinct('type')->where('status', 1)
                 ->take(4) 
                  ->get(),
            



        ]);
    }

    public function about(): View
    {
        $home = 'About';
        return view('about', [
            'battles' => Battle::latest()->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
            'aboutheadingL' => Page::where('name',$home)->where('status', 1)->where('type','headingLeft')->first(),
            'boldparaL' => Page::where('name',$home)->where('status', 1)->where('type','BoldParagraphLeft')->first(),
            'paraL' => Page::where('name',$home)->where('status', 1)->where('type','ParagraphLeft')->first(),
            'imageL' => Page::where('name',$home)->where('status', 1)->where('type','imageLeft')->first(),
            'ImgQuoteLeft' => Page::where('name',$home)->where('status', 1)->where('type','ImgQuoteLeft')->first(),
            'PlayerInformation'=>Page::WHERE('name',$home)->where('status', 1)->where('type','PlayerInformation')->first(),
            'aboutheadingR' => Page::where('name',$home)->where('status', 1)->where('type','HeadinRight')->first(),
            'boldparaR' => Page::where('name',$home)->where('status', 1)->where('type','BoldParagraphRight')->first(),
            'paraR' => Page::where('name',$home)->where('status', 1)->where('type','ParagraphRight')->first(),
            'imageR' => Page::where('name',$home)->where('status', 1)->where('type','imageRight')->first(),
            'ImgQuoteRight' => Page::where('name',$home)->where('status', 1)->where('type','ImgQuoteRight')->first(), 
            'Rightquoteauthor' => Page::where('name',$home)->where('status', 1)->where('type','Rightquoteauthor')->first(), 
            'leftquoteauthor' => Page::where('name',$home)->where('status', 1)->where('type','leftquoteauthor')->first(), 




        ]);
    }

    public function players(): View
    {
        $session_id = Session::get()->pluck('id');
        $sessionTeamId = SessionTeamPlayer::pluck('session_team_id')->toArray();
        $home = 'Player';
        $homee = 'Players';

        
        return view('players', [
 
            'sessionTeamPlayers' => PlayerScore::with('player.team.sport')
            ->whereIn('team_id', $sessionTeamId)
            ->selectRaw('player_id, SUM(score) as totalscore')
            ->groupBy('player_id')
            ->orderByDesc('totalscore')
            ->limit(8)
            ->get(),


            'matchplayed' => DB::table('player_scores')
            ->select('player_id', DB::raw('COUNT(*) as totalmatch'))
            ->groupBy('player_id')
            ->get(),

            'win' => DB::table('session_team_scores')
        ->join('session_team_players', 'session_team_scores.session_team_id', '=', 'session_team_players.session_team_id')
        ->select('session_team_players.player_id', DB::raw('SUM(CASE WHEN session_team_scores.is_win = 1 THEN 1 ELSE 0 END) as win_count'))
        ->groupBy('session_team_players.player_id')
        ->get(),
        'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
            'Heading' => Page::where('name',$homee)->where('status', 1)->where('type','Heading')->first(),
            'Paragraph' => Page::where('name',$homee)->where('status', 1)->where('type','Paragraph')->first(),

        
            ]);
    }

    public function playerDetails($playerId):View
    {
        $home = 'Player';
        return view('playerDetails',[
            'player' => Player::with('sportAttributeValues.sportAttribute')->findOrFail($playerId),
            'players' => Player::with('team')->inRandomOrder()->take(4)->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
        ]);
    }

    public function teamPoints():View
    {
        $home = 'Match';
        $sport_ids = Session::pluck('sport_id')->toArray();
        // dd($sport_id);
        return view('teamPoints',[
            'sessions' => SessionTeamScore::with(['battle.session.sport','SessionTeam.team'])
                            ->select(['battle_id','session_team_id'])
                            ->selectRaw('SUM(CASE WHEN is_win = 1 THEN 1 ELSE 0 END) as total_wins')
                            ->selectRaw('SUM(CASE WHEN is_win = 0 THEN 1 ELSE 0 END) as total_losses')
                            ->selectRaw('SUM(points) as total_points')
                            ->groupBy(['battle_id','session_team_id'])
                            ->get(),
                               'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
                            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
                            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
                            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
                            'sports' => Sport::whereIn('id', $sport_ids)->get(), 
                
                            
        ]);
    }
    
    public function leagueDetail($sportid): View
{
    // $home = 'Match';
    return view('sportleague', [
        'sessions' => SessionTeamScore::with(['battle.session.sport', 'SessionTeam.team'])
            ->whereHas('battle.session', function ($query) use ($sportid) {
                $query->where('sport_id', $sportid);
            })
            ->select(['battle_id', 'session_team_id'])
            ->selectRaw('SUM(CASE WHEN is_win = 1 THEN 1 ELSE 0 END) as total_wins')
            ->selectRaw('SUM(CASE WHEN is_win = 0 THEN 1 ELSE 0 END) as total_losses')
            ->selectRaw('SUM(points) as total_points')
            ->groupBy(['battle_id', 'session_team_id'])
            ->get(),
    ]);
}
    public function gallary(): View
    {
        $home = 'Gallery';
        return view('gallary', [
            // 'battles' => Battle::latest()->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
            'Heading' => Page::where('name',$home)->where('status', 1)->where('type','Heading')->first(),
            'Paragraph' => Page::where('name',$home)->where('status', 1)->where('type','Paragraph')->first(),
            // 'gallery' => Page::where('name',$home)->where('type','Sport')->get(),
            'filter' => Sport::get()->Where('name','!=','Flag Football')->Where('name','!=','Track & Feild')->Where('name','!=','Cross Country')->take(7),
            'gallerypic' => Gallery::where('page',$home)->get()
    ]);
    }

    public function matches(): View
    {
        $home = 'Match';
        $sessionTeamScores = SessionTeamScore::get();
        return view('matches', [
            'battles' => Battle::whereIn('id', $sessionTeamScores->pluck('battle_id'))->with(['byTeam.sessionTeam.sessionTeamScore','forTeam.sessionTeam.sessionTeamScore'])->latest()->get(),
            'latestMatch' => SessionTeamScore::latest()->with(['battle','SessionTeam.team'])->take(2)->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first()
        ]);

    }

    public function matchDetails($battleId): View
    {
        $home = 'Match';
        return view('matchDetails', [
            'battle' => Battle::with(['byTeam.sessionTeam.sessionTeamScore','forTeam.sessionTeam.sessionTeamScore'])->findOrFail($battleId),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first()
        ]);
    }

    public function contact(): View
    {   
        $home = 'Contact';
       
        
        return view('contact', [
            // 'battles' => Battle::latest()->get(),
            // 'battleData' => Battle::with(['byTeam.players', 'forTeam.players.playerscore', 'score', 'session'])->latest()->first(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first(),
            'Heading' => Page::where('name',$home)->where('status', 1)->where('type','Heading')->first(),
            'Paragraph' => Page::where('name',$home)->where('status', 1)->where('type','Paragraph')->first(),
            'contacts' => Page::where('name', $home)
                  ->whereIn('type', ['Contact','phone', 'mail','location'])
                  ->distinct('type')->where('status', 1)
                 ->take(12) 
                  ->get(),
            'contactslow' => Page::where('name', $home)
                ->whereIn('type', ['Contact','phone', 'mail','location'])
                ->distinct('type')->where('status', 1)
                ->take(4) 
                ->get(),
            // 'contactinfo' => Page::where('name',$home)->where('type', '!=', 'Contact')->get(),

           
        ]);
    }

    public function league(): View
    {
        $session_ids = SessionTeam::pluck('session_id');
        $home = 'League';

        return view('league', [
            // 'battles' => Battle::latest()->get(),
            'battleData' => Battle::with(['byTeam.players', 'forTeam.players.playerscore', 'session'])->latest()->first(),
            'latestMatch' => SessionTeamScore::latest()->with(['battle', 'SessionTeam.team'])->take(2)->get(),
            'sessions' => Session::whereIn('id', $session_ids)->with('sessionTeams.team')->get(),
            'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first()

        ]);
    }

    public function playerStat():View
    {

        $home = 'Player';
        $session_id = Session::get()->pluck('id');
        $sessionTeamId = SessionTeamPlayer::pluck('session_team_id')->toArray();
        return view('playerStat',[

            'sessionTeamPlayers' => PlayerScore::with('player.team.sport')
                ->whereIn('team_id', $sessionTeamId)
                ->selectRaw('player_id, SUM(score) as totalscore')
                ->groupBy('player_id')
                ->orderByDesc('totalscore')
                ->get(),

                'matchplayed' => DB::table('player_scores')
                ->select('player_id', DB::raw('COUNT(*) as totalmatch'))
                ->groupBy('player_id')
                ->get(),

                'win' => DB::table('session_team_scores')
                ->join('session_team_players', 'session_team_scores.session_team_id', '=', 'session_team_players.session_team_id')
                ->select('session_team_players.player_id', DB::raw('SUM(CASE WHEN session_team_scores.is_win = 1 THEN 1 ELSE 0 END) as win_count'))
                ->groupBy('session_team_players.player_id')
                ->get(),
                'seoTitle' => seo::where('page',$home)->where('title', 'seo_title')->first(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first()
        ]);
    }
    public function singlePlayerStat($playerId):View
    {
        $home = 'Player';
        return view('singlePlayerStat', [
            'SessionTeamPlayer' => SessionTeamPlayer::where('player_id',$playerId)->with(['player.playerscore.battle.session','player.team'])->get(),
            'seoDec' => seo::where('page',$home)->where('title', 'seo_description')->first(),
            'seoAuth' => seo::where('page',$home)->where('title', 'seo_author')->first(),
            'seoKey' => seo::where('page',$home)->where('title', 'seo_keyword')->first()

        ]);
    }

    public function footercontent(){
        return view('components.layouts.website',[
            'footerpara' => Page::where('name','Footer')->where('status', 1)->where('type','Paragraph')->get(),
            'footer' => Page::where('name','Footer')->where('status', 1)->get(),
        ]);
    }

}