using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Bibliotecavirtual
{
    #region Libros
    public class Libros
    {
        #region Member Variables
        protected int _idlibro;
        protected string _titulo;
        protected string _fechalanzamiento;
        protected string _autor;
        protected string _categoria;
        protected string _editorial;
        protected string _idioma;
        protected string _descripcion;
        protected string _portada;
        #endregion
        #region Constructors
        public Libros() { }
        public Libros(string titulo, string fechalanzamiento, string autor, string categoria, string editorial, string idioma, string descripcion, string portada)
        {
            this._titulo=titulo;
            this._fechalanzamiento=fechalanzamiento;
            this._autor=autor;
            this._categoria=categoria;
            this._editorial=editorial;
            this._idioma=idioma;
            this._descripcion=descripcion;
            this._portada=portada;
        }
        #endregion
        #region Public Properties
        public virtual int Idlibro
        {
            get {return _idlibro;}
            set {_idlibro=value;}
        }
        public virtual string Titulo
        {
            get {return _titulo;}
            set {_titulo=value;}
        }
        public virtual string Fechalanzamiento
        {
            get {return _fechalanzamiento;}
            set {_fechalanzamiento=value;}
        }
        public virtual string Autor
        {
            get {return _autor;}
            set {_autor=value;}
        }
        public virtual string Categoria
        {
            get {return _categoria;}
            set {_categoria=value;}
        }
        public virtual string Editorial
        {
            get {return _editorial;}
            set {_editorial=value;}
        }
        public virtual string Idioma
        {
            get {return _idioma;}
            set {_idioma=value;}
        }
        public virtual string Descripcion
        {
            get {return _descripcion;}
            set {_descripcion=value;}
        }
        public virtual string Portada
        {
            get {return _portada;}
            set {_portada=value;}
        }
        #endregion
    }
    #endregion
}