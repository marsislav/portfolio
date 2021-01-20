<?php
function mp_customizer_register ($wp_customize) {
    mp_social_customizer_section ($wp_customize);
    mp_misc_customizer_section ($wp_customize);
}