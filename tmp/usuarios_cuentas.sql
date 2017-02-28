SELECT
     usuarios.id_usuario,
     usuarios.id_cuenta,
     usuarios.no_empleado,
     usuarios.nombres,
     usuarios.apellidos,
     cuentas.red_local,
     cuentas.red_inalambrica,
     cuentas.usuario_dominio,
     cuentas.password_dominio,
     cuentas.password_local,
     cuentas.usuario_local,
     cuentas.password_outlook,
     cuentas.correo_outlook,
     cuentas.password_pst,
     departamentos.nombre as departamento,
     puestos.nombre as puesto
FROM
     cuentas INNER JOIN usuarios ON cuentas.id_cuenta = usuarios.id_cuenta
     INNER JOIN departamentos ON usuarios.id_departamento = departamentos.id_departamento
     INNER JOIN puestos ON usuarios.id_puesto = puestos.id_puesto