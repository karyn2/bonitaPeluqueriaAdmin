document.addEventListener('DOMContentLoaded', function() {
    function inicializarChoices(id) {
        return new window.Choices(`#${id}`, {
            maxItemCount: 5,
            removeItemButton: true,
            allowHTML: true,
        });
    }

    let select1 = inicializarChoices('procedimiento');
    let select2 = inicializarChoices('personal');
});
