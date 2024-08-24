import { pool } from './database.js';

class LibroController {

    async getAll(req, res) {
        try {
            const [result] = await pool.query('SELECT * FROM libros');
            res.json(result);
        } catch (error) {
            res.status(500).json({ message: 'Error al obtener los libros', error });
        }
    }

    async getOne(req, res) {
        try {
            const { id } = req.params;
            const [result] = await pool.query('SELECT * FROM libros WHERE id = ?', [id]);
            if (result.length === 0) {
                res.status(404).json({ message: 'Libro no encontrado' });
            } else {
                res.json(result[0]);
            }
        } catch (error) {
            res.status(500).json({ message: 'Error al obtener el libro', error });
        }
    }

    async add(req, res) {
        try {
            const { nombre, autor, categoria, anioPublicacion, ISBN } = req.body;
    
            // Validar que todos los campos estén presentes
            if (!nombre || !autor || !categoria || !anioPublicacion || !ISBN) {
                return res.status(400).json({ message: 'Campos requeridos faltantes o incorrectos' });
            }
    
            // Validar que el ISBN solo contenga números y tenga 13 dígitos
            const isbnRegex = /^\d{13}$/;
            if (!isbnRegex.test(ISBN)) {
                return res.status(400).json({ message: 'El ISBN debe ser un número de 13 dígitos' });
            }
    
            const [result] = await pool.query(
                'INSERT INTO Libros(nombre, autor, categoria, anio_publicacion, ISBN) VALUES (?, ?, ?, ?, ?)',
                [nombre, autor, categoria, anioPublicacion, ISBN]
            );
    
            res.json({ "Id insertado": result.insertId });
        } catch (error) {
            res.status(500).json({ message: 'Error al agregar el libro', error });
        }
    }
    
    async delete(req, res) {
        try {
            const { ISBN } = req.body;

            // Validar que se envíe el ISBN
            if (!ISBN) {
                return res.status(400).json({ message: 'ISBN es requerido' });
            }

            const [result] = await pool.query('DELETE FROM Libros WHERE ISBN = ?', [ISBN]);

            if (result.affectedRows === 0) {
                return res.status(404).json({ message: 'Libro no encontrado' });
            }

            res.json({ "Libros eliminados": result.affectedRows });
        } catch (error) {
            res.status(500).json({ message: 'Error al eliminar el libro', error });
        }
    }

    async update(req, res) {
        try {
            const { id, nombre, autor, categoria, anioPublicacion, ISBN } = req.body;

            // Validar que se envíen los campos correctos
            if (!id || !nombre || !autor || !categoria || !anioPublicacion || !ISBN) {
                return res.status(400).json({ message: 'Campos requeridos faltantes o incorrectos' });
            }

            const [result] = await pool.query('UPDATE Libros SET nombre = ?, autor = ?, categoria = ?, anio_publicacion = ?, ISBN = ? WHERE id = ?', [nombre, autor, categoria, anioPublicacion, ISBN, id]);

            if (result.changedRows === 0) {
                return res.status(404).json({ message: 'Libro no encontrado o no actualizado' });
            }

            res.json({ "Libros actualizados": result.changedRows });
        } catch (error) {
            res.status(500).json({ message: 'Error al actualizar el libro', error });
        }
    }
}

export const libro = new LibroController();
