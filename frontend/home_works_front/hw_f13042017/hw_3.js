/**
 * Created by DaimosOk on 14.04.2017.
 */
// 3) Создайте функцию find(arr, value),
// которая ищет в массиве arr значение value и возвращает его номер, если найдено, или -1, если не найдено.

function find(arr, value) {

    for (var i = 0; i < arr.length; i++ ) {
        if (arr[i] === value) return i;
    }
    return -1;
}


