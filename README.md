# Api-sGoogle

**Hub de referencia de APIs:** Google, Telegram (samples), Notion y automatización.  
Aquí guardas documentación, ejemplos y notas para consultar y reutilizar.

---

## Para qué sirve este repo

| Uso | Qué hay |
|-----|---------|
| Referencia Google | Notas y samples (Maps, etc.) |
| Samples Telegram | PHP webhook, MadelineProto, proxies |
| Notion | Material de API y páginas |
| Setup multi-lenguaje | Node, Go, .NET, PHP |

**No es el laboratorio de ejecución diaria.**  
Para correr un bot en local usa:  
→ [Extracto-API-s-Telegram-Google-Bots](https://github.com/Fobnud-8wokpo-qivsyz/Extracto-API-s-Telegram-Google-Bots)  
Para catálogo de comandos:  
→ [Telegram-Comandos-](https://github.com/Fobnud-8wokpo-qivsyz/Telegram-Comandos-)

---

## Mapa de los 3 repos

```
Api-sGoogle          →  LEER / COPIAR ejemplos (hub de referencia)
Telegram-Comandos-   →  APRENDER comandos y plantillas
Extracto-API-s-...   →  EJECUTAR bot Node (práctica)
```

---

## Estructura orientativa

```
Api-sGoogle/
├── README.md
├── docs/
│   └── INDICE.md           ← Dónde está cada cosa
├── samples/
│   └── telegram-hola.php  ← Copia limpia del bot PHP
├── javascript/
├── Ventanas bot/
├── package.json           ← axios (fetch HTTP)
└── .github/               ← Dependabot / Actions
```

Hay muchos archivos sueltos en la raíz (histórico de notas). Usa `docs/INDICE.md` para localizar temas.

---

## Cómo usarlo en la práctica

1. Busca el tema en `docs/INDICE.md`.
2. Copia el sample a tu proyecto o al repo **Extracto-...**.
3. Sustituye tokens por variables de entorno (nunca en el código público).
4. Si es bot Node, prefiere el flujo de Extracto (`npm start`).

### Sample rápido PHP

Ver `samples/telegram-hola.php` (versión limpia del clásico “Hola Bot”).

---

## Seguridad

- Tokens y API keys **solo** en `.env` o secrets.
- Este repo es público: no subas credenciales reales.
- Dependabot activo para dependencias npm/Actions.

---

## package.json

Dependencia actual: `axios` (peticiones HTTP desde Node).  
Útil para probar endpoints de APIs desde scripts locales.

---

## Licencia

Ver `LICENSE` / `LICENCIA*` en el repo.

---

**Idea de práctica:** tomar un sample de aquí + comandos de Telegram-Comandos- + bot de Extracto, y montar un mini-bot que enlace a [VIVIGEOSILHA](https://github.com/Fobnud-8wokpo-qivsyz/VIVIGEOSILHA).
