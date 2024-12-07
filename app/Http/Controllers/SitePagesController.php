<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SitePagesController extends Controller
{
    public function achievementWeek()
    {

        $pageTitle = "Achievement Week";
        $breadCrumbs = "Mandated Programs/Achievement Week";
        return view('site_pages.mandated_programs.achievement_week', compact('pageTitle', 'breadCrumbs'));
    }


    public function programs()
    {

        $pageTitle = "Programs";
        $breadCrumbs = "Programs";
        return view('site_pages.mandated_programs.programs', compact('pageTitle', 'breadCrumbs'));
    }

    

    public function talentHunt()
    {

        $pageTitle = "Talent Hunt";
        $breadCrumbs = "Mandated Programs/Talent Hunt";
        return view('site_pages.mandated_programs.talent_hunt', compact('pageTitle', 'breadCrumbs'));
    }

    public function stemProgram()
    {

        $pageTitle = "STEM Program";
        $breadCrumbs = "Mandated Programs/Omega STEM Program";
        return view('site_pages.mandated_programs.stem_program', compact('pageTitle', 'breadCrumbs'));
    }

    public function fatherhoodMentoring()
    {

        $pageTitle = "Fatherhood & Mentoring";
        $breadCrumbs = "Mandated Programs/Fatherhood & Mentoring";
        return view('site_pages.mandated_programs.fatherhood_mentoring', compact('pageTitle', 'breadCrumbs'));
    }

    public function socialAction()
    {

        $pageTitle = "Social Action";
        $breadCrumbs = "Mandated Programs/Social Action";
        return view('site_pages.mandated_programs.social_action', compact('pageTitle', 'breadCrumbs'));
    }

    public function aboutgaFounders()
    {

        $pageTitle = "The Founders";
        $breadCrumbs = "About GA/Founders";
        return view('site_pages.about_ga.founders', compact('pageTitle', 'breadCrumbs'));
    }

    public function policydocs()
    {

        $pageTitle = "Chapter Policies and Proceedures";
        $breadCrumbs = "Members/Display Policy Docs";
        return view('site_pages.ga_files.display-policy-doc', compact('pageTitle', 'breadCrumbs'));
    } 

    public function manageResources()
    {

        $pageTitle = "Manage Resources";
        $breadCrumbs = "Resources/Manage Resources";
        return view('resources.manage', compact('pageTitle', 'breadCrumbs'));
    }

    public function testPDF()
    {
        $users = User::orderBy('last_name', 'asc')->get();
    
        $data = [
            'title' => 'Welcome to GAWebapp.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 

        $pageTitle = "Chapter Policies and Proceedures";
        $breadCrumbs = "Members/Display Policy Docs";
        return view('myPDF', compact('data'));
    } 
    
    
}
