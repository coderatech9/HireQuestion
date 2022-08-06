@extends('index')

@section('style')
    <style>
        #form_container {
            background: rgb(156, 116, 250);
            max-height: max-content;
            margin: 0 auto;
            max-width: 600px;
            color: white;
        }

        .form-control {
            padding: 1em;
        }

        .form-control label {
            display: inline-block;
            width: 150px;
        }

        #number,
        #language {
            padding: 14px;
            border-radius: 15px;
            border: none;
        }

        #display_text {
            background: rgb(118, 91, 182);
            max-height: 100%;
            padding: 1em;
        }
    </style>
@endsection
@section('content')
    <div id="form_container">
        <div class="form-control">
            <label for="number">
                number
            </label>
            <input name="number" id="number">
        </div>
        <div class="form-control">
            <label for="language">
                language
            </label>
            <select id="language" name="language">
                <option value="fa">
                    fa
                </option>
                <option value="en">
                    en
                </option>
            </select>
        </div>
        <div id="display_text">
            Result Text: <span id="result_text"></span>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const send_data = function(data) {
            return $.ajax({
                url: 'api/converter',
                data: data,
                method: 'POST'
            })
        }
        $('#language').add('#number').on('change keyup', function() {
            let number = $('#number').val();
            let language = $('#language').val();
            send_data({
                number: number,
                language: language
            }).then(data => {
                $('#result_text').text(data)
            })
        });
    </script>
@endsection
