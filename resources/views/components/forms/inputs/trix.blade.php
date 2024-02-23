@props([
    'id'          => Str::uuid(),
    'name'        => 'content',
    'value'       => '',
    'placeholder' => '',
    'label'       => __('Content'),
    'required'    => false,
    'autofocus'   => false,
    'prevent'     => false,
    'single'      => false,
])

@if (! $single)
    <label
        @class([
            'form-label',
            'required' => $required,
        ])
    >
        {{ $label }}
    </label>
@endif

<input
    type="hidden"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{!! $value !!}"
/>

<trix-editor
    input="{{ $id }}"
    @required($required)
    {{ $attributes->class([
        'form-control',
    ])->merge([
        'autofocus'   => $autofocus,
        'placeholder' => $placeholder,
    ])}}
></trix-editor>

@pushOnce('css')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@endPushOnce

@pushOnce('js')
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    @if ($prevent)
        <script type="module">
            /**
             * Проверка на отсутствие контента.
             *
             * @property {object|null} trix - объект Trix.
             * 	Default: null
             */
            const trixValidate = {
                trix: null,

                /**
                 * Получить объект Trix.
                 *
                 * @return {void}
                 */
                getTrix() {
                    const data = {{ Illuminate\Support\Js::from([ 'id' => $id ]) }};

                    if ('id' in data) {
                        this.trix = document.querySelector(`trix-editor[input="${data.id}"]`);
                    }
                },

                /**
                 * Обработать событие.
                 *
                 * @param {object} event
                 * @return {void|bool}
                 */
                submitHandler(event) {
                    event.preventDefault();
                    const content = this.trix.editor.getDocument().toString();

                    // console.log('trix', this.trix);
                    // console.log('content', content);
                    // console.log('content length', content.length);
                    // console.log('content type', typeof content);
                    // console.log('content to bool', !!content);

                    // Если только перевод на новую строку - контент пуст.
                    if (content == '\n') {
                        console.log('Trix editor is empty!');
                        return false;
                    }

                    event.target.submit();
                },

                /**
                 * Прослушать событие "submit" формы.
                 *
                 * @param {function} handler
                 * @return {void}
                 */
                addFormEvent(handler) {
                    if (!this.trix) {
                        return false;
                    }

                    const ownForm = this.trix.closest('form');
                    ownForm.addEventListener('submit', handler, false);
                },

                /**
                 * Инициализация.
                 *
                 * @return {void}
                 */
                init() {
                    this.getTrix();
                    this.addFormEvent(this.submitHandler.bind(this));
                }
            };

            trixValidate.init();
        </script>
    @endif
@endPushOnce
