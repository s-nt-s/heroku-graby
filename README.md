En muchos proyectos necesito recuperar información de una url.
Principalmente su contenido, título e idioma.

Lo mejor para ello es usar `graby` (ver [j0k3r/graby](https://github.com/j0k3r/graby))
así que lo voy a encapsular en un servicio web para poder acceder a él
desde varios proyectos.

Para ello uso `heroku`, de manera que el `endpoint` sera
`http://my-app.herokuapp.com/?url=http://la.url/para/graby`
y devolverá un `json` con la información.
