@extends('layouts.admin')

@section('css_content')
    @include('admin.partials.css.layout')
    <link href="{{ asset('inspiration/css/plugins/bootstrap-markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">

@endsection

@section('content')
<!-- article meta -->
<div class="row">
	
</div>

<!-- text editor -->
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Bootstrap markdown <small>http://www.codingdrama.com/bootstrap-markdown/</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <p>
                    Bootstrap-Markdown designed to be easily integrated with your bootstrap project. It exposes useful API that allow you to fully hook-in into the plugin
                </p>
                <p>
                    Switch regular textarea within your form into Bootstrap-Markdown editor seamlessly by adding <code>data-provide="markdown"</code> attribute
                </p>

                <textarea name="content" data-provide="markdown" rows="10"></textarea>
            </div>
        </div>
    </div>
</div>

<!-- usage -->
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">

            <div class="ibox-content">

                <h2>
                    Usage
                </h2>
                <p>
                    Beside using above data-attributes, you could call it via code
                </p>
                <pre>$("#some-textarea").markdown({autofocus:false,savable:false}) </pre>
                <h4>
                    Available options are:
                </h4>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Option Name</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <code>autofocus</code>
                        </td>
                        <td><code>boolean</code></td>
                        <td>Indicates that editor will focused after instantiated. Default to <code>false</code></td>
                    </tr>
                    <tr>
                        <td>
                            <code>savable</code>
                        </td>
                        <td><code>boolean</code></td>
                        <td>Indicates that editor will have save button and action. Default to <code>false</code></td>
                    </tr>
                    <tr>
                        <td>
                            <code>hideable</code>
                        </td>
                        <td><code>boolean</code></td>
                        <td>If set to <code>true</code> then the editor will be hidden on <code>blur</code> event. Default to <code>false</code></td>
                    </tr>
                    <tr>
                        <td>
                            <code>width</code>
                        </td>
                        <td><code>mixed</code></td>
                        <td>The editor width. Default to <code>inherit</code>. You could supply any numerical value (that will be set as css), or supply valid Bootstrap class (something like <code>span2</code>)</td>
                    </tr>
                    <tr>
                        <td>
                            <code>height</code>
                        </td>
                        <td><code>mixed</code></td>
                        <td>The editor height. Default to <code>inherit</code></td>
                    </tr>
                    <tr>
                        <td>
                            <code>resize</code>
                        </td>
                        <td><code>string</code></td>
                        <td>Option to disable or change the resize property, possible values <code>none</code>,<code>both</code>,<code>horizontal</code>,<code>vertical</code>. Default <code>none</code><br>
                            If this option is enabled, the user will be able to resize the editor and preview screen.<br><br>
                            <div class="alert alert-warning">
                                <strong>Browser support</strong>
                                <p>This is currently only supported on limited browsers. See <a href="http://caniuse.com/css-resize" target="_blank">Can you run it: Resize</a> for all supported browsers</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <code>iconlibrary</code>
                        </td>
                        <td><code>string</code></td>
                        <td>The icon library to use. Glyphicons (<code>glyph</code>) and Font Awesome (<code>fa</code>) are supported. In order to use Font Awesome properly, you'll need to <a href="http://fontawesome.io/get-started/">include Font Awesome stylesheet</a> yourself. Default to <code>glyph</code></td>
                    </tr>
                    <tr>
                        <td>
                            <code>language</code>
                        </td>
                        <td><code>string</code></td>
                        <td>Localization setting. Default to <code>en</code></td>
                    </tr>

                    <tr>
                        <td>
                            <code>footer</code>
                        </td>
                        <td><code>mixed</code></td>
                        <td>Footer dom. Can be string or callback. Default is empty string</td>
                    </tr>

                    <tr>
                        <td>
                            <code>fullscreen</code>
                        </td>
                        <td><code>object</code></td>
                        <td>Contains <code>enable</code> (<code>bool</code>) and <code>icons</code> (<code>object</code>) keys.</td>
                    </tr>



                    <tr>
                        <td>
                            <code>hiddenButtons</code>
                        </td>
                        <td><code>mixed</code></td>
                        <td>Array or string of button names to be hidden. Default is empty string</td>
                    </tr>

                    <tr>
                        <td>
                            <code>disabledButtons</code>
                        </td>
                        <td><code>mixed</code></td>
                        <td>Array or string of button names to be disabled. Default is empty string</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspiration/js/inspinia.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/pace/pace.min.js') }}"></script>

<!-- Bootstrap markdown -->
<script src="{{ asset('inspiration/js/plugins/bootstrap-markdown/bootstrap-markdown.js') }}"></script>
<script src="{{ asset('inspiration/js/plugins/bootstrap-markdown/markdown.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#articles").addClass("active");
        $("#articles .nav-second-level").addClass("in");
        $("#article_add").addClass("active");

        
    });
</script>
@endsection
