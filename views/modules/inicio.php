
    <main>
        <header>
            <h2>Lista de Tareas</h2>
            <div>
                <a href="#add-modal" class="popup-with-zoom-anim">Agregar Tarea</a>
            </div>
        </header>
        <div class="container-fluid">
            <div class="progress">
                <div class="column c-do">
                    <span class="section">Por Hacer <p>2</p></span>
                    <a class="work-item popup-with-zoom-anim" href="#work-modal">
                        <div class="item-name">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="item-tags">
                            <span class="tag">programación</span>
                        </div>
                        <div class="item-data">
                            <div>
                                <ion-icon name="arrow-up-outline" class="prioridad"></ion-icon>
                                <span class="nro-changes">4</span>
                            </div>
                            <div>
                                <img src="https://picsum.photos/200/200" class="user">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column c-progress">
                    <span class="section">En Progreso <p>2</p></span>
                </div>
                <div class="column c-check">
                    <span class="section">Revisión <p>2</p></span>
                    <a class="work-item popup-with-zoom-anim" href="#work-modal">
                        <div class="item-name">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="item-tags">
                            <span class="tag">programación</span>
                        </div>
                        <div class="item-data">
                            <div>
                                <ion-icon name="arrow-up-outline" class="prioridad"></ion-icon>
                                <span class="nro-changes">4</span>
                            </div>
                            <div>
                                <img src="https://picsum.photos/200/200" class="user">
                            </div>
                        </div>
                    </a>
                    <a class="work-item popup-with-zoom-anim" href="#work-modal">
                        <div class="item-name">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="item-tags">
                            <span class="tag">programación</span>
                        </div>
                        <div class="item-data">
                            <div>
                                <ion-icon name="arrow-up-outline" class="prioridad"></ion-icon>
                                <span class="nro-changes">4</span>
                            </div>
                            <div>
                                <img src="https://picsum.photos/200/200" class="user">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column c-done">
                    <span class="section">Terminado <p>2</p></span>
                    <a class="work-item popup-with-zoom-anim" href="#work-modal">
                        <div class="item-name">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="item-tags">
                            <span class="tag">programación</span>
                        </div>
                        <div class="item-data">
                            <div>
                                <ion-icon name="arrow-up-outline" class="prioridad"></ion-icon>
                                <span class="nro-changes">4</span>
                            </div>
                            <div>
                                <img src="https://picsum.photos/200/200" class="user">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <div id="work-modal" class="zoom-anim-dialog mfp-hide work-modal">
        <div class="contenedor-fluid">
            <form class="edit-work-box">
                <div class="side">
                    <div class="field w-75">
                        <label for="">Nombre de la Tarea</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-25 prioridad">
                        <label for="">Prioridad</label>
                        <div class="field-input prioridad">
                            <button>
                                <ion-icon name="arrow-up-outline" class="alta"></ion-icon>
                            </button>
                            <button>
                                <ion-icon name="arrow-down-outline" class="baja"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="field w-50">
                        <label for="">Tiempo</label>
                        <div class="field-input">
                            <input type="date" name="" id="">
                        </div>
                    </div>
                    <div class="field w-50">
                        <label for="">Horas / Minutos</label>
                        <div class="field-input">
                            <input type="time" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Área</label>
                        <div class="field-input toggles">
                            <button class="active">Programación</button>
                            <button>Diseño</button>
                            <button>Medios Digitales</button>
                            <button>Marketing</button>
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Descripción</label>
                        <div class="field-input">
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <div class="field w-100">
                        <label for="">Creador</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Responsable</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">URL</label>
                        <div class="field-input">
                            <ion-icon name="link-outline"></ion-icon>
                            <input type="url" name="" id="">
                        </div>
                    </div>
                    <div class="field">
                        <input type="submit" value="Actualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div id="add-modal" class="zoom-anim-dialog mfp-hide work-modal">
        <div class="contenedor-fluid">
            <form class="ingresar-tarea">
                <div class="side">
                    <div class="field w-75">
                        <label for="">Nombre de la Tarea</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-25 prioridad">
                        <label for="">Prioridad</label>
                        <div class="field-input prioridad">
                            <button>
                                <ion-icon name="arrow-up-outline" class="alta"></ion-icon>
                            </button>
                            <button>
                                <ion-icon name="arrow-down-outline" class="baja"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="field w-50">
                        <label for="">Tiempo</label>
                        <div class="field-input">
                            <input type="date" name="" id="">
                        </div>
                    </div>
                    <div class="field w-50">
                        <label for="">Horas / Minutos</label>
                        <div class="field-input">
                            <input type="time" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Área</label>
                        <div class="field-input toggles">
                            <button class="active">Programación</button>
                            <button>Diseño</button>
                            <button>Medios Digitales</button>
                            <button>Marketing</button>
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Descripción</label>
                        <div class="field-input">
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="side">
                    <div class="field w-100">
                        <label for="">Creador</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">Responsable</label>
                        <div class="field-input">
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="field w-100">
                        <label for="">URL</label>
                        <div class="field-input">
                            <ion-icon name="link-outline"></ion-icon>
                            <input type="url" name="" id="">
                        </div>
                    </div>
                    <div class="field">
                        <input type="submit" value="Actualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    