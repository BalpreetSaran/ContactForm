/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

const sortTable = (table, col, reverse) => {
    let tb = table.tBodies[0], // use `<tbody>` to ignore `<thead>` and `<tfoot>` rows
        tr = Array.prototype.slice.call(tb.rows, 0), // put rows into array
        i;
    reverse = -((+reverse) || -1);
    tr = tr.sort((a, b) => // sort rows
    // `-1 *` if want opposite order
    reverse * a.cells[col].textContent.trim() // using `.textContent.trim()` for test
            .localeCompare(b.cells[col].textContent.trim()));
    for(i = 0; i < tr.length; ++i) tb.appendChild(tr[i]); // append each row in order
}

const makeSortable = (table)  => {
    let th = table.tHead, i;
    th && (th = th.rows[0]) && (th = th.cells) && (th = document.getElementsByClassName('sort'));
    if (th) i = th.length;
    else return; // if no `<thead>` then do nothing
    while (--i >= 0) ((i => {
        let dir = 1;
        th[i].addEventListener('click', () => {sortTable(table, i, (dir = 1 - dir))});
    })(i));
}

const makeAllSortable = (parent) => {
    parent = parent || document.body;
    let t = parent.getElementsByTagName('table'), i = t.length;
    while (--i >= 0) makeSortable(t[i]);
}

window.onload = () => {makeAllSortable();};
