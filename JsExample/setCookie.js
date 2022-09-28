// Function sets a cookie and then gets the cookie's values
setCookie('User', 'Sobia, 12345', 7)

const list = document.getElementById('list')
let i, value = getCookie('User')
if (value.indexOf(','))
{
    value = value.split(',')
}
for (i = 0; i < value.length; i++)
{
    list.innerHTML += '<li>' + value[i]
}