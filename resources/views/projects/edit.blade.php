@extends('layouts.app')
@section('content')
<div class="col-sm-9 col-md-9 col-lg-9 pull-left">
    <div class="row" style="background-color: #FFF; padding: 10px">
        <h1>Edit Project</h1>
        <form method="post" action="{{ route('projects.update', [$project->id]) }}">
      
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put" />
            
            <div class="form-group">
                <label for="project-name">Name<span class="required">*</span></label>
                <input
                    placeholder="Enter Name"
                    id="project-name"
                    required
                    name="name"
                    spellcheck="false"
                    class="form-control"
                    value="{{$project->name}}"
                    />
            </div>
            <div class="form-group">
                <label for="project-content">Description</label>
                <textarea
                    placeholder="Enter Description"
                    style="resize: vertical"
                    id="project-content"
                    name="description"
                    spellcheck="false"
                    rows="5"
                    class="form-control autosize-target text-left">{{$project->description}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right blog-sidebar">
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/projects/{{$project->id}}">View Project</a></li>
            <li><a href="/projects">All Projects</a></li>
        </ol>
    </div>
    <!--    <div class="sidebar-module">
            <h4>Members List</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
            </ol>
        </div>-->
</div>
@endsection