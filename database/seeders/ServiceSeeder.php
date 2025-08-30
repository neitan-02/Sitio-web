<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Acupuntura',
                'description' => ' Consiste en la inserción de agujas muy
                    finas en la piel en puntos estratégicos
                    del cuerpo. Componente de la Medicina
                    Tradicional China, que se utiliza con
                    frecuencia para tratar el dolor',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg',
                'discount_percentage' => 10,
                'date_one' => '2023-01-01',
                'date_two' => '2023-01-02',
                'reason' => 'Reason 1',
                'function' => ' Equilibra el flujo de energía y la
                    fuerza vital conocida como “QI”, al
                    insertar las agujas en los meridianos
                    se realiza un reequilibrio de la
                    energía.',
                'complement' => 'Se puede realizar la manipulación
                    a través de un Movimiento, Girar,
                    Calor o Impulsos Eléctricos',
                'effects' => 'Por lo general la inserción no suele
                    sentirse, pero puede causar una
                    sensación de calambre conocida
                    como “Toque”',
                'procces' => 'Estimulación de Nervios, Músculos
                    y Tejidos Conectivos generando la
                    liberación de los analgésicos
                    naturales del cuerpo.',
                'goal' => 'Fibromialgia
                    Cefaleas
                    Lumbalgia
                    Cervicalgia
                    Artrosis
                    Artritis Reumatoide 
                    Trastornos Respiratorios
                    Trastornos Digestivos
                    Varices 
                    Parálisis Facial
                    Hipertensión 
                    Diabetes 
                    ',
                'duration' => '50 Minutos',
            ],
            [
                'name' => 'SPA',
                'description' => 'Un centro de bienestar donde se ofrecen diversos tratamientos terapéuticos y relajantes, como masajes, tratamientos faciales y corporales, baños de vapor y más.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/SPA.jpg',
                'discount_percentage' => 15,
                'date_one' => '2023-02-01',
                'date_two' => '2023-02-02',
                'reason' => 'Reason 2',
                'function' => 'Promueve la relajación y el bienestar general a través de diversos tratamientos y terapias diseñadas para aliviar el estrés y mejorar la salud física y mental.',
                'complement' => 'Se pueden complementar los tratamientos con aromaterapia, musicoterapia y productos de alta calidad para mejorar la experiencia.',
                'effects' => 'Los efectos incluyen una sensación de relajación profunda, alivio del estrés, mejora del estado de ánimo y revitalización de la piel y los músculos.',
                'procces' => 'El proceso incluye una variedad de tratamientos personalizados, como masajes terapéuticos, tratamientos faciales y corporales, y terapias de agua.',
                'goal' => 'Relajación
                    Alivio del estrés
                    Mejora de la circulación
                    Desintoxicación
                    Revitalización de la piel
                    Alivio del dolor muscular
                    Mejora del estado de ánimo
                    Fortalecimiento del sistema inmunológico
                ',
                'duration' => '60 Minutos',

            ],
            [
                'name' => 'Auriculoterapia',
                'description' => 'Terapia basada en la estimulación de puntos específicos en la oreja, que corresponde a diversas partes del cuerpo, utilizada para tratar diversas dolencias y mejorar el bienestar general.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/12.jpg',
                'discount_percentage' => 12,
                'date_one' => '2023-03-01',
                'date_two' => '2023-03-02',
                'reason' => 'Reason 3',
                'function' => 'Estimula puntos reflejos en la oreja que se corresponden con distintas partes del cuerpo, promoviendo el equilibrio y la sanación a través de la aplicación de presión, agujas, imanes o semillas.',
                'complement' => 'Puede complementarse con técnicas de acupuntura, masaje y otras terapias alternativas para potenciar los efectos terapéuticos.',
                'effects' => 'Los efectos incluyen alivio del dolor, reducción del estrés, mejora del sueño, ayuda en la pérdida de peso y el tratamiento de adicciones.',
                'procces' => 'El proceso implica la localización y estimulación de puntos reflejos en la oreja utilizando diferentes métodos como agujas, semillas, imanes o masajes.',
                'goal' => 'Alivio del dolor
                    Reducción del estrés
                    Mejora del sueño
                    Tratamiento de adicciones
                    Apoyo en la pérdida de peso
                    Mejora de la digestión
                    Fortalecimiento del sistema inmunológico
                    Reducción de la ansiedad
                    Mejora del bienestar general
                ',
                'duration' => '45 Minutos',

            ],
            [
                'name' => 'Tarot',
                'description' => 'Lectura de cartas del tarot para obtener orientación y comprensión sobre diversos aspectos de la vida, como el amor, la carrera y la espiritualidad.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Tarot.jpg',
                'discount_percentage' => 15,
                'date_one' => '2023-05-01',
                'date_two' => '2023-05-02',
                'reason' => 'Razón 4',
                'function' => 'Interpretación de las cartas del tarot para proporcionar una visión intuitiva y profunda sobre las preguntas y preocupaciones del consultante, ayudando a tomar decisiones informadas.',
                'complement' => 'Puede complementarse con otros métodos de adivinación y terapias espirituales para una comprensión más completa.',
                'effects' => 'Proporciona claridad, orientación y perspectiva sobre situaciones de la vida, reduce la ansiedad y ayuda en la toma de decisiones.',
                'procces' => 'El proceso incluye una sesión donde se barajan y colocan las cartas del tarot, seguidas de una interpretación detallada de su significado en relación con las preguntas del consultante.',
                'goal' => 'Claridad en la toma de decisiones
                    Comprensión de desafíos personales
                    Entendimiento de relaciones
                    Orientación en carrera y finanzas
                    Crecimiento espiritual y conciencia
                    Sanación emocional',
                'duration' => '60 minutos',

            ],
            [
                'name' => 'Rehabilitación',
                'description' => 'Proceso terapéutico diseñado para ayudar a las personas a recuperarse de lesiones, cirugías o enfermedades, restaurando funciones y mejorar la calidad de vida.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Rehabilitacion.jpg',
                'discount_percentage' => 20,
                'date_one' => '2023-06-01',
                'date_two' => '2023-06-02',
                'reason' => 'Razón 5',
                'function' => 'Utilización de técnicas y ejercicios especializados para mejorar la fuerza, la movilidad, la coordinación y la función muscular afectada por una lesión o enfermedad.',
                'complement' => 'Puede complementarse con terapias adicionales como masajes, electroterapia y técnicas de relajación para optimizar la recuperación física y emocional.',
                'effects' => 'Facilita la recuperación física, reduce el dolor y la rigidez, mejora la independencia funcional y ayuda a prevenir futuras complicaciones de salud relacionadas con la lesión o enfermedad.',
                'procces' => 'El proceso de rehabilitación incluye evaluación inicial, establecimiento de metas terapéuticas, implementación de programas personalizados y seguimiento continuo para ajustes según sea necesario.',
                'goal' => 'Recuperación funcional completa
                    Reducción del dolor y la rigidez
                    Mejora de la movilidad y la flexibilidad
                    Restauración de la independencia en actividades diarias
                    Prevención de discapacidades a largo plazo',
                'duration' => '45 minutos por sesión',

            ],
            [
                'name' => 'Nutrición',
                'description' => 'Servicio enfocado en el estudio de la alimentación y su relación con la salud. Proporciona asesoramiento personalizado para mejorar los hábitos alimenticios y alcanzar metas específicas de salud.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Nutricion.jpg',
                'discount_percentage' => 15,
                'date_one' => '2023-04-01',
                'date_two' => '2023-04-02',
                'reason' => 'Razón 2',
                'function' => 'Evaluar y educar sobre las elecciones alimentarias adecuadas, basadas en las necesidades individuales, condiciones de salud y objetivos específicos como pérdida de peso, mejora del rendimiento deportivo o manejo de enfermedades crónicas.',
                'complement' => 'Incorpora análisis de composición corporal, planificación de comidas equilibradas, educación nutricional y seguimiento personalizado para garantizar la adherencia y el éxito a largo plazo.',
                'effects' => 'Promueve una alimentación saludable, mejora la energía y el bienestar general, optimiza el rendimiento físico y mental, y ayuda a prevenir enfermedades relacionadas con la dieta como la obesidad y la diabetes.',
                'procces' => 'El proceso de nutrición incluye evaluación inicial, establecimiento de objetivos dietéticos, implementación de estrategias personalizadas y monitoreo continuo para ajustes según sea necesario.',
                'goal' => 'Lograr y mantener un peso saludable
                    Mejorar la composición corporal (aumentar masa muscular, reducir grasa corporal)
                    Optimizar el rendimiento deportivo
                    Controlar condiciones médicas (diabetes, hipertensión, etc.)
                    Promover hábitos alimenticios sostenibles y saludables',
                'duration' => '60 minutos por consulta',

            ],
            [
                'name' => 'Medicina Alternativa',
                'description' => 'Servicio que abarca diversas terapias complementarias y no convencionales para promover la salud y el bienestar integral. Incluye técnicas como acupuntura, homeopatía, aromaterapia, entre otras.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Medicina-Alternativa.jpg',
                'discount_percentage' => 20,
                'date_one' => '2023-05-01',
                'date_two' => '2023-05-02',
                'reason' => 'Razón 3',
                'function' => 'Ofrecer alternativas a la medicina convencional para el tratamiento y prevención de enfermedades, promoviendo métodos naturales y holísticos que consideran la salud integral del individuo.',
                'complement' => 'Incorpora enfoques personalizados que pueden incluir desde técnicas de relajación hasta dietas especiales, adaptadas a las necesidades y condiciones específicas de cada persona.',
                'effects' => 'Fomenta la auto-sanación, fortalece el sistema inmunológico, reduce el estrés y mejora el bienestar emocional, físico y espiritual de los individuos.',
                'procces' => 'El proceso incluye una evaluación exhaustiva de la salud, la identificación de desequilibrios energéticos o físicos, la aplicación de técnicas específicas y el seguimiento continuo para ajustes y mejoras.',
                'goal' => 'Promover un enfoque integral de la salud
                    Mejorar la calidad de vida y el bienestar general
                    Reducir el uso de medicamentos convencionales y sus efectos secundarios
                    Tratar condiciones crónicas como el dolor, la ansiedad o el insomnio de manera natural',
                'duration' => 'Varía según la técnica específica aplicada',

            ],
            [
                'name' => 'Armonización',
                'description' => 'Proceso terapéutico que busca el equilibrio y la sincronización de energías vitales en el cuerpo.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/Armonización.jpg',
                'discount_percentage' => 15,
                'date_one' => '2023-01-01',
                'date_two' => '2023-01-02',
                'reason' => 'Ayuda a mejorar el bienestar emocional y físico.',
                'function' => 'Armoniza las energías desequilibradas en el cuerpo, promoviendo la salud y el bienestar general.',
                'complement' => 'Se realiza a través de técnicas como la imposición de manos, uso de cristales, entre otros métodos naturales.',
                'effects' => 'Puede generar una sensación de relajación profunda y bienestar.',
                'procces' => 'Se enfoca en liberar bloqueos energéticos y restaurar el flujo natural de energía en el cuerpo.',
                'goal' => 'Ansiedad, estrés, desequilibrios emocionales, dolores crónicos, entre otros.',
                'duration' => '60 minutos',
            ],
            [
            
                'name' => 'Healthy',
                'description' => 'Programa integral de salud enfocado en promover hábitos alimenticios saludables y equilibrados.',
                'status' => 'Activo',
                'photo' => 'https://merrash-proyecto-production.up.railway.app/images/healy.jpg',
                'discount_percentage' => 20,
                'date_one' => '2023-01-01',
                'date_two' => '2023-01-02',
                'reason' => 'Fomenta una alimentación consciente y balanceada para mejorar la salud general.',
                'function' => 'Ofrece asesoría personalizada en nutrición y hábitos alimenticios.',
                'complement' => 'Incluye planes de alimentación adaptados a las necesidades individuales de cada persona.',
                'effects' => 'Promueve la pérdida de peso saludable, mejora de la energía y vitalidad.',
                'procces' => 'Se basa en educar sobre nutrición adecuada y cambios de estilo de vida para mejorar la salud.',
                'goal' => 'Pérdida de peso, mejora de la salud digestiva, aumento de la energía, educación alimentaria.',
                'duration' => 'Varía según el programa personalizado.',
            
                
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
