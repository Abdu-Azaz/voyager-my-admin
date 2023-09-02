<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richtext{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    {{-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>
    </script> --}}

    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="{{ $row->field }}"]',
            }

            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? (object) []) !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));

            // $('#richtext{{ $row->field }}').froalaEditor();
            // var editor = new FroalaEditor('#richtext{{ $row->field }}', {
            //     // imageManagerPreloader: false,
            //     imageManagerLoadURL: false,
            //     imageUploadParam: 'image_param',
            //     imageUploadURL: '{{ route('upload_image') }}',
            //     imageUploadParams: {
            //         id: 'my_editor'
            //     },
            //     imageUploadMethod: 'POST',
            //     imageAllowedTypes: ['jpeg', 'jpg', 'png'],
            // });
            
        });
    </script>
@endpush
