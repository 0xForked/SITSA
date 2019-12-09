/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

/**
 *  Show Loading Function
 *
 */

function showLoading() {
    $('#loading').show();
}

/**
 *  Delete Function
 *
 */

function deleteData(id, route) {
    let container = document.querySelector('#deleteButtonContainer')
    let strAvailableData = `
        <a
            href="`+route+`/`+id+`/delete"
            onclick="deleteProcess()"
            class="btn btn-danger"
        >
            Hapus
        </a>
    `
    return container.innerHTML = strAvailableData
}

function deleteProcess() {
    $('#deleteModal').modal('hide');
    showLoading()
}

function updateProcess(modal) {
    var id = '#'+modal
    $(id).modal('hide');
    showLoading()
}