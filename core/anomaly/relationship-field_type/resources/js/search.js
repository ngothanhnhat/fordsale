(function (window, document) {

    let fields = Array.prototype.slice.call(
        document.querySelectorAll('select[data-provides="anomaly.field_type.relationship"].search')
    );

    fields.forEach(function (field) {
        new Choices(field, {
            shouldSort: false,
        });
    });
})(window, document);
