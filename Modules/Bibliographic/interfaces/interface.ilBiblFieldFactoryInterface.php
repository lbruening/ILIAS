<?php

/**
 * Interface ilBiblFieldFactoryInterface
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
interface ilBiblFieldFactoryInterface {

	/**
	 * @param int        $type MUST be ilBiblTypeFactoryInterface::DATA_TYPE_RIS or
	 *                         ilBiblTypeFactoryInterface::DATA_TYPE_BIBTEX
	 * @param     string $identifier
	 *
	 * @throws \ilException if a wrong $type is passed or field is not found
	 *
	 * @return \ilBiblFieldInterface
	 */
	public function getFieldByTypeAndIdentifier($type, $identifier);


	/**
	 * @param int        $type MUST be ilBiblTypeFactoryInterface::DATA_TYPE_RIS or
	 *                         ilBiblTypeFactoryInterface::DATA_TYPE_BIBTEX
	 * @param     string $identifier
	 *
	 * @throws \ilException if a wrong $type is passed
	 *
	 * @return \ilBiblFieldInterface
	 */
	public function findOrCreateFieldByTypeAndIdentifier($type, $identifier);


	/**
	 * @return ilBiblFieldInterface[] instances of all known standard-fields for the given type
	 */
	public function getAllStandardFieldForType($type);
}