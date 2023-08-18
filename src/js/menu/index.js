const botoncerrar = document.getElementById('cerrarsesion')

const cerrarsesion = async () => {
    
   const url = `/login_prueba/cerrarsesion`;
    const config = {
        method: 'GET'
    };

    try {
        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        if(data == true){

            window.location.href= '/login_prueba/'
        }        
    } catch (error) {
        console.log(error);
    }
};

botoncerrar.addEventListener('click', cerrarsesion)
