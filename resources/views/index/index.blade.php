<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        
      
        <title>Laravel 4 Chat</title>
    </head>
    <body>

        <script type="text/x-handlebars">
            @{{outlet}}
        </script>

        <script
            type="text/x-handlebars"
            data-template-name="index">
               <h1>Laravel 4 Chat</h1>
            <div class="container">
              <h1>Laravel 4 Chat</h1>
                <div class="row">

                    <div class="col-md-12">
                        <h1>Laravel 4 Chat</h1>
                        <table class="table table-striped">
                            @{{#each}}
                                <tr>
                                    <td>
                                        @{{user}}
                                    </td>
                                    <td>
                                        @{{text}}
                                    </td>
                                </tr>
                            @{{/each}}
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                            />
                            <span class="input-group-btn">
                                <button class="btn btn-default">
                                    Send
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        <script
            type="text/javascript"
            src="{{ asset("js/jquery-1.11.2.min.js") }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset("js/handlebars-v1.3.0.js") }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset("js/ember.js") }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset("js/ember-data.js") }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js") }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset("js/shared.js") }}"
        ></script>
    </body>
</html>