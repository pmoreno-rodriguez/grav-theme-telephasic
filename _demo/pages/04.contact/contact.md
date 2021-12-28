---
form:
    name: contact-form
    template: form-messages
    refresh_prevention: true
    classes: 'row gtr-100'
    fields:
        -
            name: Nombre
            label: false
            placeholder: Nombre
            validate:
                required: true
                message: 'Este campo es obligatorio'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: 'col-6 col-12-mobile'
            classes: null
        -
            name: Email
            label: false
            placeholder: Email
            validate:
                required: true
                message: 'Este campo es obligatorio'
            type: email
            outerclasses: 'col-6 col-12-mobile'
            classes: null
        -
            name: Asunto
            label: false
            type: text
            placeholder: Asunto
            validate:
                required: true
                message: 'Este campo es obligatorio'
            outerclasses: 'col-12 col-12-mobile'
            classes: null
        -
            name: Mensaje
            label: false
            placeholder: Mensaje
            validate:
                required: true
                message: 'Este campo es obligatorio'
            type: textarea
            outerclasses: 'col-12 col-12-mobile'
            classes: null
            rows: 5
        -
            name: Privacy
            type: privacy
            label: 'Privacy Policy'
            validate:
                required: false
                message: 'By using this form you agree with our Privacy Policy'
    buttons:
        -
            type: submit
            value: Submit
            outerclasses: form-field
            classes: null
        -
            type: reset
            value: Reset
            outerclasses: form-field
            classes: null
    process:
        captcha: false
        save:
            fileprefix: contact-
            dateformat: dmY-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Formulario de juanvillen.es] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        # message: 'Gracias por contactar. En breve nos pondremos en contacto con usted'
        display: /thankyou
        reset: true
title: Contact
subtitle: 'Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit'
---

