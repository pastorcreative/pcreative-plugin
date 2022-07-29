<?php 

namespace Inc;

final class Init  
{   
    /**
     * Guardamos todas las clases dentro de una array
     * @return array lista de clases
     */
    public static function get_services() {
        return [
          Pages\Admin::class,
          Base\Enqueue::class,
          Base\SettingsLinks::class 
        ];
    }
    /**
     * Loopeamos sobre la array de clases para instanciar cada una de las clases de forma automática llamando al metodo register() de cada clase si este existe.
     * @return
     */
    public static function register_services() {
        foreach ( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' ) ) {
                 $service->register();
            }
        }
    }
    /**
     * Inicializamos la clase
     * @param class $class clase del array de servicios
     * @return class instance una instancia de la clase
     */
    private static function instantiate( $class ) {
        $service = new $class();
        return $service;
    }
}