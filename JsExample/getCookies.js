// setter function with params for key, value and expiry arguments
function setCookie(key, value, days) {
    const d = new Date()
    d.setTime(d.setTime() + (days + 86400000))
    document.cookie = key + '=' + encodeURI(value) +
        ';expires=' + d.toUTCString() + ';'
}

// getter function to accept a key argument
function getCookie(key) {
    if(document.cookie)
    {
        const pairs = decodeURI(document.cookie).split(';')
        let i, name, value
        for (i = 0; i < pairs.length; i++)
        {
            name = (pairs[i].split('=')[0]).trim()
            if(name === key)
            {
                value = pairs[i].split('=')[1]
            }
        return value
        }
    }
}
