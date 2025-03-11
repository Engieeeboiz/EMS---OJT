document.addEventListener('DOMContentLoaded', function() {

    document.getElementById('add_employee').addEventListener('click', function() {
        const employee_modal = document.getElementById('add_employee_modal');

        add_employee_modal.classList.remove('hidden');

    });

    document.getElementById('cancel_employee_content').addEventListener('click', function() {
        const employee_modal = document.getElementById('add_employee_modal');

        employee_modal.classList.add('hidden');
    });

    document.getElementById('add_employee_content').addEventListener('click', function() {
        const register_modal = document.getElementById('register_employee_modal');

        register_modal.classList.remove('hidden');
    });

    document.getElementById('cancel_employee_register').addEventListener('click', function() {
        let register_modal = document.getElementById('register_employee_modal');

        register_modal.classList.add('hidden');
    });
});