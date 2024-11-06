<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Enums\PermissionEnum;
use App\Models\User;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $documents = Document::with(['user', 'client', 'project'])->paginate(10);
            
        return view('docs.index', compact('documents'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::select(['id', 'first_name', 'last_name'])->get();
        $clients = Client::select(['id', 'company_name'])->get();
        $projects = Project::select(['id', 'title'])->get();

        return view('docs.create', compact('users', 'clients', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request): RedirectResponse
    {
        // Document::create($request->validated());
    
        $document = new Document;
        
        $document->title = $request->input('title');
        $document->description = $request->input('description');
        $document->user_id = $request->input('user_id');
        $document->client_id = $request->input('client_id');
        $document->project_id = $request->input('project_id');
        $document->last_revised = $request->input('last_revised');

        $file = $request->file('filepathname');
        $name = $file->hashName();
        $filepath = $name;

        $document->filepathname = $filepath;

        // $document->filepathname = $request->input('filepathname');        
        $document->display_name = $request->input('title');
        $document->status = $request->input('status');
        $document->title = $request->input('title');

        $file = Storage::disk('public')->putFileAs('/documents', $file, $filepath, 'public');

        $document->save();    

        return redirect()->route('docs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the record by ID
        $document = Document::find($id);
        $testfilepath = '/storage/documents/Gamma-Alpha-Bylaws-2014.pdf';
        
        return response()->file($testfilepath);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        // Find the record by ID
        $document = Document::find($id);

        $users = User::select(['id', 'first_name', 'last_name'])->get();
        $clients = Client::select(['id', 'company_name'])->get();
        $projects = Project::select(['id', 'title'])->get();

        return view('docs.edit', compact('document', 'users', 'clients', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, $id): RedirectResponse
    {        
        // Find the record by ID
        $document = Document::find($id);

        if($document)
        {
            $document->title = $request->input('title');
            $document->description = $request->input('description');
            $document->user_id = $request->input('user_id');
            $document->client_id = $request->input('client_id');
            $document->project_id = $request->input('project_id');
            $document->last_revised = $request->input('last_revised');

            $file = $request->file('filepathname');
            $name = $file->hashName();
            $filepath = $name;

            $document->filepathname = $filepath;
            $document->display_name = $request->input('title');
            $document->status = $request->input('status');
            $document->title = $request->input('title');

            $file = Storage::disk('public')->putFileAs('/documents', $file, $filepath, 'public');

            $document->save();

        }  

        return redirect()->route('docs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {           
        // Find the record by ID
        $document = Document::find($id);

        // Check if the record exists
        if ($document) {
            // Delete the record
            $document->delete();
        } 
        
        return redirect()->route('docs.index');
    }
}
