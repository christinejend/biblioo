<?php
    namespace Controller;

    use Model\Editors;
    use Model\Books;
    use Model\Authors;

    class EditorsController {
        private $editors_model = null;

        public function __construct() {
            $this -> editors_model = new Editors();
        }

        public function index() {

            $editors = $this->editors_model->all();
            $view = 'indexEditors.php';

            return ['editors' => $editors, 'view' => $view, 'page_title' => 'ebooks - Les éditeurs'];
        }
        public function show() {
            if (!isset($_GET['id'])) {
                die('il manque un identifiant a votre livre');
            }
            $id = intval($_GET['id']);
            $editor = $this->editors_model->find($id);
            $books = null;
            $authors = null;

            if( isset( $_GET[ 'with' ] ) ) {
                $with = explode( ',', $_GET[ 'with' ] );
                if( in_array( 'books', $with ) ) {
                    $books_model = new Books();
                    $book = $books_model -> getBooksByEditorId( $editor -> id );
                }
            }

            if( isset( $_GET[ 'with' ] ) ) {
                $with = explode( ',', $_GET[ 'with' ] );
                if( in_array( 'authors', $with ) ) {
                    $authors_model = new Authors();
                    $author = $authors_model -> getAuthorsByEditorId( $editor -> id );
                }
            }

            $view = 'showEditors.php';


            return ['editor' => $editor,
                    'view' => $view,
                    'page_title' => 'ebooks - ' . $editor->name,
                    'books' => $book,
                    //'authors' => $author
                ];
        }
    }
