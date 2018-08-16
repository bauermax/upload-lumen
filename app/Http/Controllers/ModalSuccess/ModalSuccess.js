import React from 'react'
import { Modal, Button } from 'react-bootstrap'




const ModalSuccess = ({ link, show, closeModal }) => (

  <div className="ModalSuccess">

    <p>Click to get the full Modal experience!</p>

          <Button bsStyle="primary" bsSize="large" onClick={this.handleShow}>
            Launch demo modal
          </Button>

          <Modal show={this.state.show} onHide={this.handleClose}>
            <Modal.Header closeButton>
              <Modal.Title>Modal heading</Modal.Title>
            </Modal.Header>
            <Modal.Body>
              <h4>Text in a modal</h4>
              <p>
                Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
              </p>

            </Modal.Body>
            <Modal.Footer>
              <Button onClick={this.handleClose}>Close</Button>
            </Modal.Footer>
          </Modal>


  </div>

)


export default ModalSuccess
